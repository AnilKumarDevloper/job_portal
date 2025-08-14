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
                                        data-bs-target="#it_skill_edit" data-mode="edit"><i
                                            class="ri-pencil-line"></i></a>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#it_skill_add" data-mode="add">Add IT skills</a>
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
                                                        data-bs-target="#it_skill_edit"><i
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
                                            {{ $candidate->job_title }}
                                            <a class="text-decoration-none text-dark" data-bs-toggle="modal"
                                                data-bs-target="#employment"><i class="ri-pencil-line"></i></a>
                                        </strong>
                                    </p>
                                    <p class="p_font m-0">{{ $candidate->company_name }}</p>
                                    <p class="text-muted p_font m-0">
                                        @if ($candidate->notice_period == '15_days_or_less')
                                            15 Days or less Notice Period
                                        @elseif ($candidate->notice_period == '1_month')
                                            1 Month Notice Period
                                        @elseif ($candidate->notice_period == '2_months')
                                            2 Months Notice Period
                                        @elseif ($candidate->notice_period == '3_months')
                                            3 Months Notice Period
                                        @endif
                                    </p>
                                    <p class="m-0 text-muted p_font">
                                        <span>
                                            @if ($candidate->employment_type == 'full_time')
                                                Full Time
                                            @elseif ($candidate->employment_type == 'intern')
                                                Intern
                                            @endif
                                        </span>
                                        | (
                                        @if ($candidate->experience > 0)
                                            {{ $candidate->experience }} {{ Str::plural('Year', $candidate->experience) }}
                                        @endif

                                        @if ($candidate->experience > 0 && $candidate->experience_month > 0)
                                            {{ ' ' }}
                                        @endif

                                        @if ($candidate->experience_month > 0)
                                            {{ $candidate->experience_month }}
                                            {{ Str::plural('Month', $candidate->experience_month) }}
                                        @endif
                                        )
                                    </p>
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
                                        data-bs-target="#add_profile_summry"><i class="ri-pencil-line"></i></a>
                                </span>
                                <a class="add_profile_details text-decoration-none" type="button" data-bs-toggle="modal"
                                    data-bs-target="#profile_summry">Add Profile summary </a>
                            </div>

                            <p style="font-size: 14px;">
                                {{ $candidate->profile_summary }}
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

@section('user_profile_modal')
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
        $(document).ready(function() {
            $('#skill-add-form').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('frontend.update-skills') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        });
                        $('#skill_add').modal('hide');
                    },
                });
            });
            $('#add-employment-form').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('frontend.add-employment') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        }).then(() => {
                            $('#employment').modal('hide');
                            location.reload();
                        });
                    },
                });
            });
            $('#itskill-add-form').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);

                $.ajax({
                    url: "{{ route('frontend.add-itskill') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr(
                            'content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        }).then(() => {
                            $('#it_skill_add').modal('hide');
                            location.reload();
                        });
                    },
                });
            });

            $('#add-profile-summary').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('frontend.add-profile-summary') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        }).then(() => {
                            $('#profile_summry').modal('hide');
                            location.reload();
                        });
                    },
                    error: function(xhr) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Something went wrong!',
                        });
                    }
                });
            });

            $('#add-education-form').on('submit', function(e) {
                e.preventDefault();
                let formData = new FormData(this);
                $.ajax({
                    url: "{{ route('frontend.add-education-details') }}",
                    type: "POST",
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(response) {
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: response.message,
                        }).then(() => {
                            $('#education').modal('hide');
                            location.reload();
                        });
                    },
                    error: function(e) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Something went wrong!',
                        });
                    }
                });
            });
        });
    </script>
@endsection
