@extends('layouts.frontend.main')

@section('main-section')
    <section>
        <div class="container">
            <div class="card mt-4 mb-3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center align-items-center ">
                            <div class="position-relative ">
                                <img class="profiles2"
                                    src="https://media2.dev.to/dynamic/image/width=800%2Cheight=%2Cfit=scale-down%2Cgravity=auto%2Cformat=auto/https%3A%2F%2Fwww.gravatar.com%2Favatar%2F2c7d99fe281ecd3bcd65ab915bac6dd5%3Fs%3D250"
                                    id="profile_image">
                                <label for="upload_profile_img" class="set_profile_image">
                                    <i class="ri-camera-line"></i>
                                </label>
                                <input type="file" class="d-none" accept="image, jpg, png" alt="image upload"
                                    id="upload_profile_img">
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="profile_detaols2">
                                <div class="userName2 d-flex gap-2">
                                    <span>
                                        <h1 class="m-0 text-center">Deepak Sahani</h1>
                                        <p class="text-muted">Profile last updated <span class="text-dark"> -
                                                Yesterday</span></p>
                                    </span>
                                    <span>
                                        <button class="bg-transparent" style="border: 0px;" data-bs-toggle="modal"
                                            data-bs-target="#profile_edit"> <i class="ri-pencil-line"></i></button>
                                    </span>
                                </div>
                                <hr class="hr" style="width: 40%;">
                                <div class="d-flex gap-3">
                                    <div class="d-flex flex-column gap-3 border2">
                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-map-pin-line"></i>
                                            <span class="">New Delhi, INDIA</span>
                                        </span>

                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-briefcase-line"></i>
                                            <span class="">2.5 year experience</span>
                                        </span>

                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-shopping-bag-line"></i>
                                            <span class="">Add availability to join</span>
                                        </span>

                                    </div>

                                    <div class="d-flex flex-column gap-3 border2">
                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-phone-line"></i>
                                            <span class="">7454877544 </span>
                                        </span>

                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-shopping-bag-line"></i>
                                            <span class="">Add availability to join</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3 mobile_dnone">
                    <div class="card">
                        <div class="card-body">
                            <h3 class="headings">Recommended Jobs for you</h3>
                            <hr>
                            <div>
                                <ul class="add_detals">

                                    <li>
                                        <span> Resume </span>
                                        <label for="resume-upload" class="text-primary"
                                            style="font-weight: 400; cursor: pointer;">
                                            Upload
                                        </label>
                                    </li>
                                    
                                    <li>
                                        <span> Key skills </span>
                                        <a href="#skill_add" data-bs-toggle="modal" data-bs-target="#skill_add">Add</a>
                                    </li>

                                    <li>
                                        <span> IT skills </span>
                                        <a href="javascript()" data-bs-toggle="modal" data-bs-target="#it_skill_add">Add</a>
                                    </li>
                                    <li>
                                        <span> Employment </span>
                                        <a href="javascript()" data-bs-toggle="modal" data-bs-target="#employment">Add</a>
                                    </li>
                                    <li>
                                        <span> Education </span>
                                        <a href="javascript()" data-bs-toggle="modal" data-bs-target="#education">Add</a>
                                    </li>

                                    <li>
                                        <span> Profile summary </span>
                                        <a href="javascript()" data-bs-toggle="modal"
                                            data-bs-target="#profile_summry">Add</a>
                                    </li>

                                    <li>
                                        <span> Personal details</span>
                                        <a href="javascript()" data-bs-toggle="modal"
                                            data-bs-target="#personal_details">Add</a>
                                    </li>

                                    <li>
                                        <span> Licence/Cirtification</span>
                                        <a href="javascript()" data-bs-toggle="modal"
                                            data-bs-target="#personal_details">Add</a>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="col-12">

                                <div class="upload-box">
                                    <label for="resume-upload" class="upload-label">
                                        <strong>Already have a resume?</strong> <a
                                            class="text-primary text-decoration-none">Upload resume</a>
                                    </label>
                                    <input type="file" id="resume-upload" accept=".doc,.docx,.rtf,.pdf" />
                                    <p>Supported Formats: doc, docx, rtf, pdf, upto 2 MB</p>
                                </div>

                            </div>
                        </div>
                    </div>



                    <!--- key and skills start-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>
                                    <strong>Key skills</strong>
                                    <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                        data-bs-target="#skill_add"><i class="ri-pencil-line"></i></a>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#skill_add">Add skills</a>
                            </div>

                            <ul class="keySkillstype list-unstyled d-flex flex-wrap m-0 ">
                                <li>It Security</li>
                                <li>Chat Support</li>
                                <li>Project Management</li>
                                <li>It Head</li>
                            </ul>
                        </div>
                    </div>
                    <!--- key and skills end-->


                    <!--- IT skills start-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>
                                    <strong>IT skills</strong>
                                    <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                        data-bs-target="#it_skill_add"><i class="ri-pencil-line"></i></a>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#it_skill_add">Add IT skills</a>
                            </div>

                            <div class="table-responsive">
                                <table class="table skillTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Skills</th>
                                            <th scope="col">FiVersionrst</th>
                                            <th scope="col">Last used</th>
                                            <th scope="col">Experience</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Javascript</td>
                                            <td>v6</td>
                                            <td>2025</td>
                                            <td>2 Years 2 Months</td>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <button class="border-0 bg-transparent" data-bs-toggle="modal"
                                                        data-bs-target="#it_skill_add"><i
                                                            class="ri-pencil-line"></i></button>
                                                    <button class="border-0 bg-transparent" type="button"
                                                        id="delete_skill"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--- IT skills end-->

                    <!--- Employment  start-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>
                                    <strong>Employment</strong>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#employment">Add Employment </a>
                            </div>

                            <div class="company_container">
                                <div class="companys">
                                    <p class="m-0">
                                        <strong class="text-muted p_font">
                                            Front End Developer
                                            <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                                data-bs-target="#employment"><i class="ri-pencil-line"></i></a>
                                        </strong>
                                    </p>
                                    <p class="p_font m-0">Infosys</p>
                                    <p class="text-muted p_font m-0">15 Days or less Notice Period</p>
                                    <p class="m-0 text-muted p_font"><span>Full-time</span> | Feb 2024 to Present (1 year 5
                                        months)</p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--- Employment  end-->

                    <!--- Education start-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>
                                    <strong>Education</strong>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#education">Add Education</a>
                            </div>

                            <div class="table-responsive">
                                <table class="table skillTable">
                                    <thead>
                                        <tr>
                                            <th scope="col">Course</th>
                                            <th scope="col">University/Institute</th>
                                            <th scope="col">Course type</th>
                                            <th scope="col" style="width: 10%;">Course duration From</th>
                                            <th scope="col" style="width: 150px;">Course duration To</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>BCA</td>
                                            <td>Swami vivekanand subharti university</td>
                                            <td>Full Time</td>
                                            <td>2019</td>
                                            <td>2022</td>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <button class="border-0 bg-transparent" data-bs-toggle="modal"
                                                        data-bs-target="#edit_Education"><i
                                                            class="ri-pencil-line"></i></button>
                                                    <button class="border-0 bg-transparent delete_education"
                                                        type="button"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>MCA</td>
                                            <td>Swami vivekanand subharti university</td>
                                            <td>Full Time</td>
                                            <td>2022</td>
                                            <td>2024</td>
                                            <td>
                                                <div class="d-flex gap-3">
                                                    <button class="border-0 bg-transparent" data-bs-toggle="modal"
                                                        data-bs-target="#edit_Education"><i
                                                            class="ri-pencil-line"></i></button>
                                                    <button class="border-0 bg-transparent delete_education"
                                                        type="button"><i class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                    <!--- Education end-->

                    <!--- Profile summary  start-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>
                                    <strong>Profile summary</strong>
                                    <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                        data-bs-target="#profile_summry"><i class="ri-pencil-line"></i></a>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#profile_summry">Add Profile summary </a>
                            </div>

                            <p style="font-size: 14px;">
                                A highly skilled and creative Front-End Developer with 2 years of experience in designing,
                                developing,
                                and maintaining responsive and user-friendly web applications. Proficient in HTML, CSS,
                                JavaScript, jquery and React js also with extensive
                                experience in modern frameworks such as React js
                                . Adept at collaborating with cross-functional teams to deliver high-quality projects that
                                enhance user experiences. Strong problem-solving skills,
                                attention to detail, and a passion for staying current with the latest industry trends and
                                technologies.
                            </p>

                        </div>
                    </div>
                    <!--- Profile summary  end-->

                    <!--- Personal details  start-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>
                                    <strong>Personal details</strong>
                                    <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                        data-bs-target="#personal_details"><i class="ri-pencil-line"></i></a>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#personal_details">Add Personal details</a>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Gender</p>
                                        <p><strong class="text-muted p_font">Male</strong> </p>
                                    </div>

                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Marital Status</p>
                                        <p><strong class="text-muted p_font">Single</strong> </p>
                                    </div>

                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Pincode</p>
                                        <p><strong class="text-muted p_font">201301</strong> </p>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Have you taken a career break?</p>
                                        <p><strong class="text-muted p_font">Yes</strong> </p>
                                    </div>
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Permanent address</p>
                                        <p><strong class="text-muted p_font">Delhi</strong> </p>
                                    </div>

                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Language proficiency</p>
                                        <p><strong class="text-muted p_font"><span>Hindi, </span>
                                                <span>English</span></strong> </p>
                                    </div>

                                </div>
                                <div class="col-md-4">

                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Date of birth</p>
                                        <p><strong class="text-muted p_font">10-05-2001</strong> </p>
                                    </div>
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Hometown</p>
                                        <p><strong class="text-muted p_font">Gorakhpur</strong> </p>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>
                    <!--- Personal details  end-->

                </div>
            </div>

        </div>
    </section>
@endsection
