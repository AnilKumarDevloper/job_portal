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
                            {{-- <div class="profile_detaols2">
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
                            </div> --}}


                            <div class="profile_detaols2">
                                <div class="userName2 d-flex gap-2">
                                    <span>
                                        <h1 class="m-0 text-center">{{ $user->name ?? 'N/A' }}</h1>
                                        <p class="text-muted">Profile last updated <span
                                                class="text-dark">{{ $lastUpdatedHuman }}</span></p>
                                    </span>
                                    <span>
                                        <button class="bg-transparent" style="border: 0px;" data-bs-toggle="modal"
                                            data-bs-target="#profile_edit"><i class="ri-pencil-line"></i></button>
                                    </span>
                                </div>
                                <hr class="hr" style="width: 40%;">
                                <div class="d-flex gap-3">
                                    <div class="d-flex flex-column gap-3 border2">
                                        <span class="d-flex gap-3 text-muted textmuteds">
                                            <i class="ri-map-pin-line"></i>
                                            <span>{{ $user->city ? $cities->find($user->city)->name . ', ' . $countries->find($user->country)->name : 'N/A' }}</span>
                                        </span>
                                        <span class="d-flex gap-3 text-muted textmuteds">
                                            <i class="ri-briefcase-line"></i>
                                            <span>{{ $candidate->experience ?? 'N/A' }} experience</span>
                                        </span>
                                        <span class="d-flex gap-3 text-muted textmuteds">
                                            <i class="ri-shopping-bag-line"></i>
                                            <span>{{ $candidate->availability ?? 'Add availability to join' }}</span>
                                        </span>
                                    </div>
                                    <div class="d-flex flex-column gap-3 border2">
                                        <span class="d-flex gap-3 text-muted textmuteds">
                                            <i class="ri-phone-line"></i>
                                            <span>{{ $user->phone ?? 'N/A' }}</span>
                                        </span>
                                        <span class="d-flex gap-3 text-muted textmuteds">
                                            <i class="ri-shopping-bag-line"></i>
                                            <span>{{ $candidate->availability ?? 'Add availability to join' }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="profile_detaols2">
                                <div class="userName2 d-flex align-items-center gap-3">
                                    <div class="flex-grow-1">
                                        <h1 class="m-0 text-start">{{ Auth::user()->name ?? '' }}</h1>
                                        <p class="text-muted mb-0">Profile last updated: <span
                                                class="text-dark">{{ $lastUpdatedHuman }}</span></p>
                                    </div>
                                    <div>
                                        <button class="bg-transparent border-0" data-bs-toggle="modal"
                                            data-bs-target="#profile_edit">
                                            <i class="ri-pencil-line fs-5"></i>
                                        </button>
                                    </div>
                                </div>
                                <hr class="hr" style="width: 40%;">
                                <div class="d-flex gap-3">
                                    <div class="d-flex flex-column gap-3 border2">

                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-map-pin-line"></i>
                                            {{ optional($cities->firstWhere('id', $user->city))->name ?? 'City' }},
                                            {{ optional($states->firstWhere('id', $user->state))->name ?? 'State' }},
                                            {{ optional($countries->firstWhere('id', $user->country))->name ?? 'Country' }}
                                        </span>

                                        <span class="d-flex gap-1 text-muted">
                                            <i class="ri-briefcase-line"></i>
                                            @if ($candidate->is_experienced == '1')
                                                <span>Experienced</span>
                                            @elseif ($candidate->is_experienced == '0')
                                                <span>Inexperienced</span>
                                            @endif
                                        </span>
                                    </div>

                                    <div class="d-flex flex-column gap-3 border2">
                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-phone-line"></i>
                                            <span class="">
                                                {{ $user->phone ?? 'N/A' }}
                                            </span>
                                        </span>

                                        <span class="d-felx gap-3 text-muted textmuteds">
                                            <i class="ri-shopping-bag-line"></i>
                                            @if ($candidate->availability == '15_days')
                                                <span>Available within 15 days</span>
                                            @elseif ($candidate->availability == '1_month')
                                                <span>Available within 30 days</span>
                                            @elseif ($candidate->availability == '2_months')
                                                <span>Available within 60 days</span>
                                            @elseif ($candidate->availability == '3_months')
                                                <span>Available within 90 days</span>
                                            @else
                                                <span>Availability not specified</span>
                                            @endif
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
                            <div class="col-md-12 mb-3">
                                <div class="form-group">
                                    <label class="form-label mb-2">Select Job Position<span
                                            class="text-danger">*</span></label>
                                    <select class="form-control selects1" required id="aviation_form"
                                        style="border: 1px solid #86b7fe;">
                                        <option selected disabled>Select Job Position</option>
                                        <option value="pilot">Pilot</option>
                                        <option value="skilled_non_skilled">Skilled / Non Skilled Staff Job</option>
                                        <option value="cabin_crew">Cabin Crew</option>
                                        <option value="engineer">Engineer</option>
                                        <option value="dispatcher">Dispatcher</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form_container">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between mb-2">
                                        <span>
                                            <strong>Pilot</strong>
                                            <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                                data-bs-target="#pilot"><i class="ri-pencil-line"></i></a>
                                        </span>
                                        <!-- <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#aviation" >Add </a>   -->
                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Licence/Certificate*</p>
                                                <p><strong class="text-muted p_font">ATPL-Heli Licence</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Licence Authority</p>
                                                <p><strong class="text-muted p_font">Transport Canada (Canada)</strong>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Country of Licence/Approval</p>
                                                <p><strong class="text-muted p_font">Afghanistan</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Licence Number</p>
                                                <p><strong class="text-muted p_font">ABC4541</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Select Latest Fleet</p>
                                                <p><strong class="text-muted p_font">A300-600</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Select Latest Rank</p>
                                                <p><strong class="text-muted p_font">Check Airman</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Latest Airframe</p>
                                                <p><strong class="text-muted p_font">A220</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Current Engine Type</p>
                                                <p><strong class="text-muted p_font">Rolls Royce</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Total Hours on Fleet in Rank</p>
                                                <p><strong class="text-muted p_font">Rolls Royce</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Select Valid Medical</p>
                                                <p><strong class="text-muted p_font">Yes</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Other Non-Flying Position</p>
                                                <p><strong class="text-muted p_font">Flying Position</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Country of Licence/Approval</p>
                                                <p><strong class="text-muted p_font">Afghanistan</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Height</p>
                                                <p><strong class="text-muted p_font">40cm</strong> </p>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="personal_info">
                                                <p class="p_font mb-0 text-muted">Weight</p>
                                                <p><strong class="text-muted p_font">50Kg</strong> </p>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>

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

                    <!--- aviations  start-->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between mb-2">
                                <span>
                                    <strong>Aviation</strong>
                                    <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                        data-bs-target="#aviation"><i class="ri-pencil-line"></i></a>
                                </span>
                                <!-- <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal" data-bs-target="#aviation" >Add </a>   -->
                            </div>

                            <div class="row">

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Licence/Certificate*</p>
                                        <p><strong class="text-muted p_font">ATPL-Heli Licence</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Licence Authority</p>
                                        <p><strong class="text-muted p_font">Transport Canada (Canada)</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Country of Licence/Approval</p>
                                        <p><strong class="text-muted p_font">Afghanistan</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Licence Number</p>
                                        <p><strong class="text-muted p_font">ABC4541</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Select Latest Fleet</p>
                                        <p><strong class="text-muted p_font">A300-600</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Select Latest Rank</p>
                                        <p><strong class="text-muted p_font">Check Airman</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Latest Airframe</p>
                                        <p><strong class="text-muted p_font">A220</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Current Engine Type</p>
                                        <p><strong class="text-muted p_font">Rolls Royce</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Total Hours on Fleet in Rank</p>
                                        <p><strong class="text-muted p_font">Rolls Royce</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Select Valid Medical</p>
                                        <p><strong class="text-muted p_font">Yes</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Other Non-Flying Position</p>
                                        <p><strong class="text-muted p_font">Flying Position</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Country of Licence/Approval</p>
                                        <p><strong class="text-muted p_font">Afghanistan</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Height</p>
                                        <p><strong class="text-muted p_font">40cm</strong> </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="personal_info">
                                        <p class="p_font mb-0 text-muted">Weight</p>
                                        <p><strong class="text-muted p_font">50Kg</strong> </p>
                                    </div>
                                </div>


                            </div>


                        </div>
                    </div>
                    <!--- aviations  end-->

                    <!--- key and skills start-->
                    <div class="card mb-3">
                        {{-- <div class="card-body">
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
                        </div> --}}

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
                            <ul class="keySkillstype list-unstyled d-flex flex-wrap m-0">
                                @forelse ($skills as $skill)
                                    <li>{{ $skill }}</li>
                                @empty
                                    <li class="text-muted">No skills added yet.</li>
                                @endforelse
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

@section('non-avation')
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: '{{ session('success') }}',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            });
        </script>
    @endif

    @if (session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('error') }}'
            });
        </script>
    @endif

    <script>
        $('.select2').select2({
            dropdownParent: $('#skill_add'),
        });

        $('.select2').select2({
            dropdownParent: $('#personal_details'),
        });

        $('.skill-select').select2({
            dropdownParent: $('#skill_add')
        });

        $('.personal-select').select2({
            dropdownParent: $('#personal_details')
        });

        $(document).ready(function() {
            $('#delete_skill').on('click', function(e) {
                e.preventDefault();
                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't to delete this skill!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your skill has been deleted.",
                            icon: "success"
                        });
                    }
                });
            })
        })
    </script>
    <script>
        $(document).ready(function() {
            $('#search_job').on('input', function() {
                let value = $(this).val();
                $(this).val(value.replace(/[^a-zA-Z0-9 ]/g, ''));
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#aviation_form').on('change', function() {
                let aviation_val = $(this).val();
                if (aviation_val === 'pilot') {
                    $('#pilot').modal('show');
                } else if (aviation_val === 'skilled_non_skilled') {
                    $('#skilled_non_skilled').modal('show');
                } else if (aviation_val === 'cabin_crew') {
                    $('#cabin_crew').modal('show');
                } else if (aviation_val === 'engineer') {
                    $('#engineer').modal('show');
                } else if (aviation_val === 'dispatcher') {
                    $('#dispatcher').modal('show');
                } else {
                    console.log(aviation_val)
                }
            });
        });
    </script>
@endsection
