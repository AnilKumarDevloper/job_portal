@extends('layouts.backend.main')
@section('main-section')



    <!--- page wrapper section starts-->
    <div class="page-wrapper">
    
      <div class="page-titles">
          <div class="row"> 
            <div class="col-8 align-self-center">
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0 d-flex align-items-center">
                  <li class="breadcrumb-item">
                    <a href="{{ route('backend.dashboard') }}" class="link"><i class="ri-home-3-line fs-5"></i></a>
                  </li>
                  <li class="breadcrumb-item active" aria-current="page">Candidate</li>
                </ol>
                <h3 class="mb-0 fw-bold">New Candidate</h3>
              </nav> 
            </div>  

            <div class="col-4 d-flex align-items-center justify-content-end">
              <a href="javascript:void(0)" onclick="history.back()" class="btn btn-sm d-flex align-items-center ms-3 addButton">
                <i class="ri-arrow-go-back-line"></i>Back
              </a>
            </div>
          </div>
      </div>

      <div class="container-fluid">
        <!-- row --> 
        <div class="row">
            <div class="col-12">
                <form id="formSubmit">
                    <div class="card borderRadius"> 
                        <!-- <div class="card-header bg-white p-3">
                            <h5 class="card-title mb-0 headerText">General Information</h5>
                        </div> -->
                        <div class="card-body p-3"> 
                    
                                <div class="row formselector">
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                            <label class="text-dark">First Name <span class="text-danger"> *</span></label>
                                            <input type="text" placeholder="First Name" class="form-control typeText" required > 
                                        </div>
                                    </div> 
                                     <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                            <label class="text-dark">Last Name <span class="text-danger"> *</span></label>
                                            <input type="text" placeholder="Last Name" class="form-control typeText" required > 
                                        </div>
                                    </div> 

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                            <label class="text-dark">Email<span class="text-danger"> *</span></label>
                                            <input type="email" placeholder="Email" class="form-control" required> 
                                        </div>
                                    </div> 

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                            <label class="text-dark">Father Name<span class="text-danger"> *</span></label>
                                            <input type="text" placeholder="Father Name" class="form-control typeText" required > 
                                        </div>
                                    </div>  

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                            <label class="text-dark">Password <span class="text-danger"> *</span></label>
                                            <input type="password" placeholder="Password" class="form-control typePassword " required > 
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                            <label class="text-dark">Confirm Password <span class="text-danger"> *</span></label>
                                            <input type="password" placeholder="Confirm Password:" class="form-control typePassword" required > 
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                            <label class="text-dark">Birth Date <span class="text-danger"> *</span></label>
                                            <input type="date" placeholder="Birth Date" class="form-control" required > 
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                                <label class="text-dark">Gender <span class="text-danger"> *</span></label> 
                                                 <div class="form-check">
                                                       <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                                                       <label class="form-check-label" for="flexRadioDefault1">
                                                            Male
                                                       </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                           Female
                                                    </label>
                                                </div>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                         <div class="form-group select2form"> 
                                            <label class="text-dark " >Skill</label> 
                                            <select class="select2 form-control block" multiple="multiple" style="width: 100%">
                                                <option>Computer Skill</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mb-4">
                                         <div class="form-group select2form"> 
                                            <label class="text-dark "  >Languages</label> 
                                            <select class="select2 form-control block" multiple="multiple" style="width: 100%">
                                                <option>English</option>
                                                <option>Hindi</option> 
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                             <label class="text-dark">Marital Status <span class="text-danger"> *</span></label> 
                                             <select class="form-control selectForm" id="select2-with-Marital" style="width: 100%;">
                                                      <option selected>Select Marital Status</option>
                                                      <option >Single</option>  
                                                      <option >Married</option>  
                                             </select>
                                        </div>
                                    </div>
                                      <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Nationality <span class="text-danger"> *</span></label>
                                                <input type="text" placeholder="Nationality" class="form-control typeText" required > 
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">National ID Card <span class="text-danger"> *</span></label>
                                                <input type="text" placeholder="National ID Card" class="form-control text-uppercase" required maxlength="12" > 
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Country <span class="text-danger"> *</span></label> 
                                                <select class="form-control selectForm" id="select2-with-Country" style="width: 100%;">
                                                        <option selected>Select Country</option>
                                                        <option >India</option>  
                                                        <option >Australia</option>  
                                                        <option >America</option>  
                                                </select>
                                            </div>
                                        </div>
                                      <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                             <label class="text-dark">State <span class="text-danger"> *</span></label> 
                                             <select class="form-control selectForm" id="select2-with-State" style="width: 100%;">
                                                      <option selected>Delhi</option>
                                                      <option >Uttar Pradesh</option>  
                                             </select>
                                        </div>
                                      </div>

                                    <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                             <label class="text-dark">City <span class="text-danger"> *</span></label> 
                                             <select class="form-control selectForm" id="select2-with-City" style="width: 100%;">
                                                      <option selected>Delhi</option>
                                                      <option >New Delhi</option>  
                                             </select>
                                        </div>
                                    </div> 

                                     <div class="col-md-4 mb-4">
                                        <div class="form-group"> 
                                              <label class="text-dark">Mobile Number <span class="text-danger"> *</span></label> 
                                              <input type="number" placeholder="Mobile Number" class="form-control typeNumber" required > 
                                        </div>
                                     </div> 
                                        <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Experience: (In Years) <span class="text-danger"> *</span></label> 
                                                <input type="number" placeholder="Experience: (In Years)" class="form-control yearExp" required > 
                                            </div>
                                        </div> 

                                        <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Career Level <span class="text-danger"> *</span></label> 
                                                <select class="form-control selectForm" id="select2-with-Career" style="width: 100%;">
                                                        <option selected>Select Career Level</option>
                                                        <option >Developer</option>   
                                                </select>
                                            </div>
                                        </div>

                                         <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Career Level <span class="text-danger"> *</span></label> 
                                                <select class="form-control selectForm" id="select2-with-Industry" style="width: 100%;">
                                                        <option selected>Select Industry</option>
                                                        <option >Marketing</option>  
                                                        
                                                </select>
                                            </div>
                                        </div>

                                         <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Functional Area <span class="text-danger"> *</span></label> 
                                                <select class="form-control selectForm" id="select2-with-Functional" style="width: 100%;">
                                                        <option selected>Select Functional Area</option>
                                                        <option >ABC</option>  
                                                </select>
                                            </div>
                                        </div>

                                         <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Current Salary <span class="text-danger"> *</span></label>
                                                <input type="number" placeholder="Current Salary" class="form-control" required > 
                                            </div>
                                        </div>

                                          <div class="col-md-4 mb-4">
                                            <div class="form-group"> 
                                                <label class="text-dark">Expected Salary <span class="text-danger"> *</span></label>
                                                <input type="number" placeholder="Expected Salary" class="form-control" required > 
                                            </div>
                                         </div>

                                        
                                         <div class="col-md-4 mb-4">
                                            <div class="form-group">
                                                <label class="text-dark">Salary Currency<span class="text-danger"> *</span></label>
                                                <select class="form-control bg-white" required="">
                                                    <option disabled="" selected="">Select Salary Currency</option>
                                                    <option>ABC</option> 
                                                </select>
                                            </div>
                                        </div> 
                                       

                                     <div class="col-md-6 mb-4">
                                          <div class="form-group"> 
                                              <label class="text-dark" for="title">Facebook URL<span class="text-danger"> *</span></label>
                                              <div class="input-group">
                                                  <span class="input-grouptext"><i class="ri-facebook-line"></i></span>
                                                  <input class="form-control" placeholder="https://www.facebook.com/" name="facbook" required type="text"> 
                                              </div>
                                          </div>
                                     </div>

                                      <div class="col-md-6 mb-4">
                                          <div class="form-group"> 
                                              <label class="text-dark" for="title">Linkedin URL<span class="text-danger"> *</span></label>
                                              <div class="input-group">
                                                  <span class="input-grouptext"><i class="ri-linkedin-line"></i></span>
                                                  <input class="form-control" placeholder="https://in.linkedin.com/" name="linkdin" required type="text"> 
                                              </div>
                                          </div>
                                     </div>                        

                                      <div class="col-md-12 mb-4">
                                            <div class="row">
                                                    <div class="col-md-6">
                                                            <div class="form-group"> 
                                                                <label class="text-dark" for="title">Status </label>
                                                                <div class="form-check">
                                                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="languageRadio1">
                                                                        <label class="form-check-label" for="languageRadio1">
                                                                            Immediate Available
                                                                        </label>
                                                                </div>

                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="languageRadio2" checked>
                                                                    <label class="form-check-label" for="languageRadio2">
                                                                        Not Immediate Available
                                                                    </label>
                                                                </div> 
                                                            </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <div class="form-group"> 
                                                                <label class="text-dark" for="title">Status </label>
                                                                  <div class="input-group">
                                                                        <div class="form-check form-switch">
                                                                           <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked style="width: 40px;"> 
                                                                        </div>
                                                                 </div>
                                                             </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                            <div class="form-group"> 
                                                                <label class="text-dark" for="title">Is Verified </label>
                                                                  <div class="input-group">
                                                                        <div class="form-check form-switch">
                                                                           <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked style="width: 40px;"> 
                                                                        </div>
                                                                 </div>
                                                             </div>
                                                    </div>
                                            </div>
                                      </div>
                                      <div class="col-md-4 mb-4">
                                          <div class="form-group"> 
                                              <label class="text-dark" for="title">Available At<span class="text-danger"> *</span></label>
                                               <input class="form-control" placeholder="Available At"  required type="text">
                                          </div>
                                       </div>
                                      <div class="col-sm-6 mb-4">
                                          <div class="form-group">
                                            <label class="text-dark" for="title">Address<span class="text-danger"> *</span></label>
                                                <textarea style="width: 100%; height: 100px;" placeholder="Address"> </textarea>
                                          </div>
                                      </div>
                                </div> 
                                <div class="submitBtn mt-5 d-flex justify-content-end gap-3"> 
                                    <button type="submit" class="btn btnBg text-white">Submit</button>
                                    <button type="button" class="btn btnBg text-white">Cancel</button>
                                </div>
                        </div>  
                    </div> 
                </form>
            </div>
        </div>
      </div> 
    </div> 
  </div> 
  @section('javascript-section')
  @endsection
@endsection