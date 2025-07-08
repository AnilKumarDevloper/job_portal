<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <link href="styles.css" rel="stylesheet">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
     <link  href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"  rel="stylesheet"/>
     <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">   
        @routes
        @if (config('app.env') == 'local')
            @vite(['resources/js/app.js'])
        @else 
            <script src="{{ asset('build/assets/app-3227c578.js') }}" defer></script>
        @endif
  <style>
      *{
        padding: 0px;
        margin: 0px;
        box-sizing: border-box;
        font-family: "Jost", sans-serif;
        }
        body{ 
            height: 100vh;
            overflow: hidden;
        }
        .login_condidate{
            width: 80%;
        }
        .form-group input:focus{
            outline: none;
            box-shadow: none;
        }
        .sign_inButton{ 
           border: none;
           background-color: #131D4F;
           padding: 10px;
           color: #fff;
           font-weight: 500;
           border-radius: 10px;
        }
        .headings{
            font-size: 22px;
        }
   </style>
</head>
<body>
    
    <section class="w-100 h-100"> 
            <div class="row h-100 w-100">
                <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-color: #131D4F;">
                    <div>
                        <h1 class="text-white" id="welcome_text">Welcome to login</h1>
                        
                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center justify-content-center">
                        <div class="login_condidate">
                                <div class="card" >
                                    <div class="card-body">

                                            <div class="login" id="login_elements">
                                                    <h2 class="headings">Log in</h2>
                                                    <form action="{{ route('frontend.login_store') }}" method="POST">
                                                        @csrf
                                                        <div class="form-group">
                                                            <label class="form-label mb-0">Email id</label>
                                                            <input type="email" placeholder="Email" class="form-control" name="email" maxlength="35"  required>
                                                        </div>
                                                        <div class="form-group mt-3">
                                                                <label class="form-label mb-0">Password</label>
                                                                <input type="password" placeholder="Password" name="password" class="form-control typePassword"  required>
                                                        </div>
                                                        <div class="d-flex justify-content-end mt-2 mb-2">
                                                            <a href="#" class="text-decoration-none text-muted" id="forget_password">Forgot your password? </a>
                                                        </div>
                                                        <div class="form-group d-flex justify-content-center mt-3 mb-3">
                                                                <button class="sign_inButton w-75 text-center text-decoration-none" type="submit" > Sign In</button>
                                                        </div>
                                                    </form>
                                                    <p class="text-center">Don't have an account? <a type="button" id="createNew_account" class="text-decoration-none">Create new account &#8594;</a></p>
                                             </div> 

                                             <!---- forget password start-->
                                                <div class="login" id="forget_elements" style="display: none;">
                                                    <h2 class="headings">Forgot password</h2>
                                                    <form>
                                                        <div class="form-group">
                                                            <label class="form-label mb-0">Email id</label>
                                                            <input type="email" placeholder="Email id" class="form-control"  required>
                                                        </div> 
                                                         
                                                        <div class="form-group d-flex justify-content-center mt-3 mb-3">
                                                            <a  href="index.html" class=" sign_inButton w-75 text-center text-decoration-none" type="submit">Send OTP</a>
                                                        </div>
                                                    </form>
                                                   <p class="text-center">Back to <a type="button" class="text-decoration-none gologin">Login &#8594;</a></p>
                                              </div> 
                                             <!---- forget password end-->

                                             <!--- register user-->
                                             <div class="register login" id="register_elements" style="display: none;">
                                                    <h2 class="headings">Create your profile</h2>
                                                    <form id="register_user" action="{{ route('frontend.register') }}" method="POST">
                                                    @csrf    
                                                    <div class="row">
                                                            <div class="col-md-6 mb-3">
                                                                 <div class="form-group">
                                                                    <label class="form-label mb-0">First Name<span class="text-danger">*</span></label>
                                                                    <input type="text" name="first_name" placeholder="First Name" class="form-control typeText" maxlength="25" required>
                                                                </div>
                                                            </div>

                                                             <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-0">Last Name<span class="text-danger">*</span></label>
                                                                    <input type="text" name="first_name" placeholder="Last Name" class="form-control typeText" maxlength="25" required>
                                                                </div>
                                                            </div>
                                                            
                                                            <div class="col-md-12 mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-0">Email id<span class="text-danger">*</span></label>
                                                                    <input type="email" name="email" placeholder="Email" class="form-control" required>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-0">Mobile Number<span class="text-danger">*</span></label>
                                                                    <input type="number" name="phone" placeholder="Mobile Number" class="form-control typeNumber" required>
                                                                </div>
                                                            </div> 

                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-0">Country <span class="text-danger">*</span></label>
                                                                     <select class="form-control selects1" required>
                                                                            <option>India</option>
                                                                            <option>Out of India</option>
                                                                     </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-0">Satate <span class="text-danger">*</span></label>
                                                                     <select class="form-control selects1" required> 
                                                                            <option>UP</option> 
                                                                     </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                <div class="form-group">
                                                                    <label class="form-label mb-0">City<span class="text-danger">*</span></label>
                                                                     <select class="form-control selects1" required>
                                                                            <option>Delhi</option>
                                                                            <option>Noida</option>
                                                                     </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                     <div class="form-group">
                                                                            <label class="form-label mb-0">Password<span class="text-danger">*</span></label>
                                                                            <input type="password" placeholder="Password" class="form-control typePassword" required id="password">
                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                            <label class="form-label mb-0">Confirm Password<span class="text-danger">*</span></label>
                                                                            <input type="password" placeholder="Confirm Password" class="form-control typePassword" required id="confirm_password">
                                                                    </div>
                                                            </div>

                                                            <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                            <label class="form-label mb-0">Gender<span class="text-danger">*</span></label>
                                                                            <select class="form-control selects1" required>
                                                                                <option>Male</option>
                                                                                <option>Female</option>
                                                                            </select>
                                                                    </div>
                                                            </div>

                                                              <div class="col-md-6 mb-3">
                                                                    <div class="form-group">
                                                                            <label class="form-label mb-0">Aviation & Non Aviation<span class="text-danger">*</span></label>
                                                                            <select class="form-control selects1" id="aviation_non_aviation" required>
                                                                                <option selected disabled>Select Aviation or Non Aviation</option>
                                                                                <option value="aviation">Aviation</option>
                                                                                <option value="non_aviation">Non Aviation</option>
                                                                            </select>
                                                                    </div>
                                                             </div>

                                                            <div class="col-md-12 mb-3">

                                                                    <div class="d-flex gap-5">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="experienced" id="experienced" checked required>
                                                                                <label class="form-check-label" for="experienced">
                                                                                    I'm experienced
                                                                                </label>
                                                                            </div>

                                                                            <div class="form-check">
                                                                                <input class="form-check-input" type="radio" name="experienced" id="fresher" required>
                                                                                <label class="form-check-label" for="fresher">
                                                                                    I'm a fresher
                                                                                </label>
                                                                            </div>
                                                                    </div>
                                                            </div> 

                                                        </div> 
                                                         
                                                        <div class="form-group d-flex justify-content-center mt-3 mb-3">
                                                                <button class=" sign_inButton w-75 text-center text-decoration-none" type="submit">Register Now</button>
                                                        </div>
                                                    </form>
                                                    <p class="text-center">You have an account <a type="button" class="text-decoration-none gologin">Login &#8594;</a></p>
                                             </div>

                                    </div>
                                </div>
                        </div>
                </div>
            </div>

    </section>
   

  <!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script src="script/script.js"> </script>

<script>
$(document).ready(function () {
     let login_elements = $('#login_elements');
     let register_elements = $('#register_elements'); 
     let forget_elements = $('#forget_elements');

    $('#createNew_account').on('click', function () {  
       register_elements.show();
       login_elements.hide();
       forget_elements.hide();
       $('#welcome_text').text('Welcome to Register');
     });

     $('.gologin').on('click', function () { 
            register_elements.hide();
            login_elements.show();
            forget_elements.hide();
            $('#welcome_text').text('Welcome to Login');
      })

    $('#forget_password').on('click', function () { 
        register_elements.hide();
        login_elements.hide();
        forget_elements.show();
         $('#welcome_text').text('Forget Password');
    })
});

</script>

<script>
      // register user form 
    $(document).ready(function () {  
        $('#register_elements').on('submit', function (event) {  
                event.preventDefault();
            let aviation_non_aviation = $('#aviation_non_aviation').val();
            if($('#password').val().trim() !== $('#confirm_password').val().trim()){
                return;
            }
            if(aviation_non_aviation === "aviation"){ 
                window.location.href = 'aviation_profile.html';
            }else if(aviation_non_aviation === "non_aviation"){
                 window.location.href = 'profile.html';
            }else{
                return;
            } 

        });
     });

</script>

</body>
</html>