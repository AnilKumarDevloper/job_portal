<!--  Footer. -->
<footer class="text-center mt-5" style="background-color: #ffffff">

    <div class="container pt-3 pb-3">

        <section class="mb-2">
            <a class="btn btnoutlinelight  m-1" href="#!" role="button">
                <i class="ri-facebook-line"></i>
            </a>

            <a class="btn btnoutlinelight m-1" href="#!" role="button">
                <i class="ri-twitter-line"></i>
            </a>

            <a class="btn btnoutlinelight  m-1" href="#!" role="button">
                <i class="ri-google-line"></i>
            </a>

            <a class="btn btnoutlinelight m-1" href="#!" role="button">
                <i class="ri-instagram-line"></i>
            </a>

            <a class="btn btnoutlinelight m-1" href="#!" role="button">
                <i class="ri-linkedin-line"></i>
            </a>

            <a class="btn btnoutlinelight m-1" href="#!" role="button">
                <i class="ri-github-line"></i>
            </a>

        </section>

    </div>

    <div class="text-center p-3" style="background-color: #f4f7fa;">
        © 2025 Copyright:
        <a class="text-muted text-decoration-none" href="https://mdbootstrap.com/">boltheight.com</a>
    </div>

</footer>

{{-- Non Aviation Modal --}}

<!-- pilot Modal Start -->
<div class="modal fade" id="pilot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Pilot</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row ">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Preferred Location<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="if applying to a specific hub or location"
                                    class="form-control typeText" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Date of Last Flight<span
                                        class="text-danger">*</span></label>
                                <input type="date" placeholder="Date of Last Flight" class="form-control " required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Select Latest Fleet<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Latest Fleet</option>
                                    <option>A300-600</option>
                                    <option>A300-B4</option>
                                    <option>A310</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Select Latest Rank<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Captain</option>
                                    <option>Check Airman</option>
                                    <option>Check Captain</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Licence/Certificate<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>ATPL-Heli Licence</option>
                                    <option>Commercial Pilot Licence</option>
                                    <option>Commercial Pilot Licence-Heli</option>
                                    <option>CPL inc. ATPL Frozen</option>
                                    <option>Multi-Crew Pilot Licence</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Country of Licence/Approval<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1">
                                    <option>Afghanistan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Licence Number<span class="text-danger">*</span></label>
                                <input type="number" placeholder="Licence Number" class="form-control" maxlength="50"
                                    required="">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Total Hours on Fleet in Rank<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Enter Total flight house" class="form-control"
                                    maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Select Valid Medical <span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Yes</option>
                                    <option>No</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Other Non-Flying Position<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Other Non-Flying Position" class="form-control"
                                    maxlength="50" required="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Seve</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- pilot Modal End -->

<!-- Skilled / Non Skilled Staff Job Modal Start -->
<div class="modal fade" id="skilled_non_skilled" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">

            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Skilled / Non Skilled Staff Job</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="row ">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Preferred Location<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="if applying to a specific hub or location"
                                    class="form-control typeText" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Latest/Current Company<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Company Name or N/A if not employed"
                                    class="form-control" maxlength="70" required>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Seve</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Skilled / Non Skilled Staff Job Modal End -->


<!-- cabin crew Modal Start -->
<div class="modal fade" id="cabin_crew" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Cabin Crew</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form>
                <div class="modal-body">
                    <div class="row ">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Preferred Location<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="if applying to a specific hub or location"
                                    class="form-control typeText" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Latest Fleet<span class="text-danger">*</span></label>
                                <input type="text" placeholder="A320, A35778" class="form-control" maxlength="50"
                                    required="">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Height<span class="text-danger">*</span></label>
                                <input type="number" placeholder="in cm" class="form-control" maxlength="50"
                                    required="">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Weight<span class="text-danger">*</span></label>
                                <input type="number" placeholder="in kg" class="form-control" maxlength="50"
                                    required="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Seve</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- cabin crew Modal End -->


<!-- engineer Modal Start -->
<div class="modal fade" id="engineer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Engineer</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row ">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Preferred Location<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="if applying to a specific hub or location"
                                    class="form-control typeText" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Select Latest Rank<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Captain</option>
                                    <option>Check Airman</option>
                                    <option>Check Captain</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Licence/Certificate<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>ATPL-Heli Licence</option>
                                    <option>Commercial Pilot Licence</option>
                                    <option>Commercial Pilot Licence-Heli</option>
                                    <option>CPL inc. ATPL Frozen</option>
                                    <option>Multi-Crew Pilot Licence</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Country of Licence/Approval<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Afghanistan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Licence Number<span
                                        class="text-danger">*</span></label>
                                <input type="number" placeholder="Licence Number" class="form-control"
                                    maxlength="50" required="">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Latest Airframe<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Select Latest Airframe</option>
                                    <option>A220</option>
                                    <option>A310</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Current Engine Type<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Select Current Engine Type</option>
                                    <option>Rolls Royce</option>
                                    <option>CFM International</option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Seve</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- engineer Modal End -->


<!-- dispatcher Modal Start -->
<div class="modal fade" id="dispatcher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Dispatcher</h1>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row dispatcher">

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Preferred Location<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="if applying to a specific hub or location"
                                    class="form-control typeText" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Date of Last Flight<span
                                        class="text-danger">*</span></label>
                                <input type="date" placeholder="Date of Last Flight" class="form-control "
                                    required="">
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Latest Fleet<span class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Select Latest Airframe</option>
                                    <option>A220</option>
                                    <option>A310</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Dispatcher Approval<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Select Dispatcher Approval</option>
                                    <option>Yes</option>
                                    <option>A310</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Approval Authority<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Select Approval Authority</option>
                                    <option>Country of Licence/Approval</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Licence/Certificate<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>ATPL-Heli Licence</option>
                                    <option>Commercial Pilot Licence</option>
                                    <option>Commercial Pilot Licence-Heli</option>
                                    <option>CPL inc. ATPL Frozen</option>
                                    <option>Multi-Crew Pilot Licence</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Country of Licence/Approval<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" required>
                                    <option>Afghanistan</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-1">Licence Number<span
                                        class="text-danger">*</span></label>
                                <input type="number" placeholder="Licence Number" class="form-control"
                                    maxlength="50" required="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Seve</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- dispatcher Modal End -->


<!-- aviations type all modals end---------------------------------------jkljk544444444444gh=-=------------------------------------------------------->



<!--- profile edit modal start-->
<div class="modal fade" id="profile_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Basic details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form action="{{ route('frontend.update-personal-details') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row profile_form input_form">
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">First Name<span class="text-danger">*</span></label>
                                <input type="text" placeholder="First Name" name="first_name"
                                    class="form-control typeText" value="{{ $user->first_name }}" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Last Name<span class="text-danger">*</span></label>
                                <input type="text" placeholder="Last Name" name="last_name"
                                    class="form-control typeText" value="{{ $user->last_name }}" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Mobile Number<span class="text-danger">*</span></label>
                                <input type="number" placeholder="Mobile Numbe" name="phone"
                                    class="form-control typeNumber" value="{{ $user->phone }}" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Email id<span class="text-danger">*</span></label>
                                <input type="email" placeholder="Email" name="email" class="form-control"
                                    value="{{ $user->email }}" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Country <span class="text-danger">*</span></label>
                                <select name="country" name="country" class="form-control selects1">
                                    @foreach ($countries as $country)
                                        <option value="{{ $country->id }}"
                                            {{ $user->country == $country->id ? 'selected' : '' }}>
                                            {{ $country->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">State <span class="text-danger">*</span></label>
                                <select name="state" class="form-control selects1">
                                    @foreach ($states->where('country_id', $user->country) as $state)
                                        <option value="{{ $state->id }}"
                                            {{ $user->state == $state->id ? 'selected' : '' }}>
                                            {{ $state->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">City<span class="text-danger">*</span></label>
                                <select name="city" class="form-control selects1">
                                    @foreach ($cities->where('state_id', $user->state) as $city)
                                        <option value="{{ $city->id }}"
                                            {{ $user->city == $city->id ? 'selected' : '' }}>
                                            {{ $city->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Gender<span class="text-danger">*</span></label>
                                <select class="form-control selects1" name="gender" required>
                                    <option value="Male" {{ $user->gender == 'Male' ? 'selected' : '' }}>Male
                                    </option>
                                    <option value="Female" {{ $user->gender == 'Female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Add availability to join<span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1" name="availability" required>
                                    <option value="15_days"
                                        {{ $user->candidateDetail->availability == '15_days' ? 'selected' : '' }}>15
                                        Days</option>
                                    <option value="1_month"
                                        {{ $user->candidateDetail->availability == '1_month' ? 'selected' : '' }}>1
                                        Month</option>
                                    <option value="2_months"
                                        {{ $user->candidateDetail->availability == '2_months' ? 'selected' : '' }}>2
                                        Months</option>
                                    <option value="3_months"
                                        {{ $user->candidateDetail->availability == '3_months' ? 'selected' : '' }}>3
                                        Months</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label mb-0">Experience Status <span
                                    class="text-danger">*</span></label>
                            <div class="d-flex gap-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_experienced"
                                        id="experienced" value="1"
                                        {{ $user->candidateDetail->is_experienced == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="experienced">
                                        I'm experienced
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_experienced"
                                        id="fresher" value="0"
                                        {{ $user->candidateDetail->is_experienced == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="fresher">
                                        I'm a fresher
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--- profile edit modal end-->

<!-- KEY Skill Modal Start -->
<div class="modal fade" id="skill_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Key skills</h1>
                    <p class="text-muted modal_pText">Mention skills like programming languages (Java, Python),
                        softwares (Microsoft Word, Excel) and more, to show your technical expertise.</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="skill-add-form">
                @csrf
                <div class="modal-body">
                    <div class="col-md-12 mb-4">
                        <div class="form-group select2form">
                            <label class="text-dark">Skill / software name</label>
                            <select class="select2 skill-select form-control block" name="skills[]"
                                multiple="multiple" style="width: 100%">
                                <option value="it_security"
                                    {{ in_array('it_security', $selectedSkillKeys ?? []) ? 'selected' : '' }}>It
                                    Security</option>
                                <option value="chat_support"
                                    {{ in_array('chat_support', $selectedSkillKeys ?? []) ? 'selected' : '' }}>Chat
                                    Support</option>
                                <option value="project_management"
                                    {{ in_array('project_management', $selectedSkillKeys ?? []) ? 'selected' : '' }}>
                                    Project Management</option>
                                <option value="ithead"
                                    {{ in_array('ithead', $selectedSkillKeys ?? []) ? 'selected' : '' }}>It Head
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save Skills</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- KEY Skill Modal End -->

<!-- iT Skill Modal Start -->

{{-- Add IT Skills Modal --}}
<div class="modal fade" id="it_skill_add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Add Your IT Skills</h1>
                    <p class="text-muted modal_pText">Add skills that best define your expertise, for e.g, Direct
                        Marketing, Oracle, Java, etc. (Minimum 1) Skills</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="itskill-add-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Skill / software name<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Skill / software name" class="form-control"
                                    maxlength="50" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Software version<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Skill / software name" class="form-control"
                                    maxlength="10" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Last used <span class="text-danger">*</span></label>
                                <select class="form-control selects1">
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Experience <span class="text-danger">*</span></label>
                                <select class="form-control selects1">
                                    <option value="0_year">0 Year</option>
                                    <option value="1_year">1 Year</option>
                                    <option value="2_year">2 Year</option>
                                    <option value="3_year">3 Year</option>
                                    <option value="4_year">4 Year</option>
                                    <option value="5_year">5 Year</option>
                                    <option value="6_year">6 Year</option>
                                    <option value="7_year">7 Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">In Month <span class="text-danger">*</span></label>
                                <select class="form-control selects1">
                                    <option value="0_year">0 Year</option>
                                    <option value="1_year">1 Year</option>
                                    <option value="2_year">2 Year</option>
                                    <option value="3_year">3 Year</option>
                                    <option value="4_year">4 Year</option>
                                    <option value="5_year">5 Year</option>
                                    <option value="6_year">6 Year</option>
                                    <option value="7_year">7 Year</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Save</button>
            </div>
        </div>
    </div>
</div>


{{-- Edit IT Skills Modal --}}
<div class="modal fade" id="it_skill_edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Edit Your IT Skills</h1>
                    <p class="text-muted modal_pText">Add skills that best define your expertise, for e.g, Direct
                        Marketing, Oracle, Java, etc. (Minimum 1) Skills</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Skill / software name<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Skill / software name" class="form-control"
                                    maxlength="50" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Software version<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Skill / software name" class="form-control"
                                    maxlength="10" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Last used <span class="text-danger">*</span></label>
                                <select class="form-control selects1">
                                    <option value="2025">2025</option>
                                    <option value="2024">2024</option>
                                    <option value="2023">2023</option>
                                    <option value="2022">2022</option>
                                    <option value="2021">2021</option>
                                    <option value="2020">2020</option>
                                    <option value="2019">2019</option>
                                    <option value="2018">2018</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Experience <span class="text-danger">*</span></label>
                                <select class="form-control selects1" name="experience_year">
                                    <option value="0_year">0 Year</option>
                                    <option value="1_year">1 Year</option>
                                    <option value="2_year">2 Year</option>
                                    <option value="3_year">3 Year</option>
                                    <option value="4_year">4 Year</option>
                                    <option value="5_year">5 Year</option>
                                    <option value="6_year">6 Year</option>
                                    <option value="7_year">7 Year</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">In Month <span class="text-danger">*</span></label>
                                <select class="form-control selects1" name="experience_month">
                                    <option value="zero_month">0 Month</option>
                                    <option value="1_month">1 Month</option>
                                    <option value="2_month">2 Month</option>
                                    <option value="3_month">3 Month</option>
                                    <option value="4_month">4 Month</option>
                                    <option value="5_month">5 Month</option>
                                    <option value="6_month">6 Month</option>
                                    <option value="7_month">7 Month</option>
                                    <option value="8_month">8 Month</option>
                                    <option value="9_month">9 Month</option>
                                    <option value="10_month">10 Month</option>
                                    <option value="11_month">11 Month</option>
                                    <option value="12_month">12 Month</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Seve</button>
            </div>
        </div>
    </div>
</div>
<!-- IT Skill Modal End -->

<!-- Employment Modal Start -->
<div class="modal fade" id="employment" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Employment</h1>
                    <p class="text-muted modal_pText"> Details like job title, company name, etc, help employers
                        understand your work</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="add-employment-form">
                    @csrf
                    <div class="row">

                        {{-- Current Employment --}}
                        <div class="col-md-12 mb-4">
                            <label class="form-label mb-2">Is this your current employment? <span
                                    class="text-danger">*</span></label>
                            <div class="form-group d-flex gap-3 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_current_employment"
                                        id="employmentYes" value="1"
                                        {{ old('is_current_employment', $candidate->is_current_employment) == 1 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="employmentYes">Yes</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="is_current_employment"
                                        id="employmentNo" value="0"
                                        {{ old('is_current_employment', $candidate->is_current_employment) == 0 ? 'checked' : '' }}>
                                    <label class="form-check-label" for="employmentNo">No</label>
                                </div>
                            </div>
                        </div>

                        {{-- Employment Type --}}
                        <div class="col-md-12 mb-4">
                            <label class="form-label mb-2">Employment type <span class="text-danger">*</span></label>
                            <div class="form-group d-flex gap-3 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employment_type"
                                        id="employmentTypeFullTime" value="full_time"
                                        {{ old('employment_type', $candidate->employment_type) == 'full_time' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="employmentTypeFullTime">Full Time</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="employment_type"
                                        id="employmentTypeInternship" value="intern"
                                        {{ old('employment_type', $candidate->employment_type) == 'intern' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="employmentTypeInternship">Internship</label>
                                </div>
                            </div>
                        </div>

                        {{-- Experience --}}
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Total experience <span
                                        class="text-danger">*</span></label>
                                <div class="d-flex gap-2 flex-sm-nowrap">
                                    <select class="form-control selects1" name="experience">
                                        <option disabled>Select Year</option>
                                        @for ($i = 0; $i <= 10; $i++)
                                            <option value="{{ $i }}"
                                                {{ old('experience', $candidate->experience) == $i ? 'selected' : '' }}>
                                                {{ $i }} {{ $i == 1 ? 'Year' : 'Years' }}
                                            </option>
                                        @endfor
                                    </select>
                                    <select class="form-control selects1" name="experience_month">
                                        <option disabled>Select Month</option>
                                        @for ($i = 0; $i <= 12; $i++)
                                            <option value="{{ $i }}"
                                                {{ old('experience_month', $candidate->experience_month) == $i ? 'selected' : '' }}>
                                                {{ $i }} {{ $i == 1 ? 'Month' : 'Months' }}
                                            </option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>

                        {{-- Company Name --}}
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Current company name<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Current company name" name="company_name"
                                    class="form-control typeText"
                                    value="{{ old('company_name', $candidate->company_name) }}" required>
                            </div>
                        </div>

                        {{-- Job Title --}}
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Current job title<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Type your job designation" class="form-control"
                                    name="job_title" maxlength="50"
                                    value="{{ old('job_title', $candidate->job_title) }}" required>
                            </div>
                        </div>

                        {{-- Joining Date --}}
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Joining date<span class="text-danger">*</span></label>
                                <input type="date" class="form-control" name="joining_date"
                                    value="{{ old('joining_date', $candidate->joining_date) }}" required>
                            </div>
                        </div>

                        {{-- Current Salary --}}
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Current salary<span
                                        class="text-danger">*</span></label>
                                <input type="number" placeholder="Current salary" name="current_salary"
                                    class="form-control"
                                    value="{{ old('current_salary', $candidate->current_salary) }}" required>
                            </div>
                        </div>

                        {{-- Notice Period --}}
                        <div class="col-md-6 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Notice period<span class="text-danger">*</span></label>
                                <select class="form-control selects1" name="notice_period" required>
                                    <option disabled>Select Notice Period</option>
                                    @php
                                        $notices = [
                                            '15_days_or_less' => '15 Days or Less',
                                            '1_month' => '1 Month',
                                            '2_months' => '2 Months',
                                            '3_months' => '3 Months',
                                            'more_than_3_months' => 'More than 3 Months',
                                        ];
                                    @endphp
                                    @foreach ($notices as $value => $label)
                                        <option value="{{ $value }}"
                                            {{ old('notice_period', $candidate->notice_period) == $value ? 'selected' : '' }}>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        {{-- Job Profile --}}
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Job profile<span class="text-danger">*</span></label>
                                <textarea class="form-control" name="job_profile" placeholder="Type here..." required>{{ old('job_profile', $candidate->job_profile) }}</textarea>
                            </div>
                        </div>
                    </div>

                    {{-- Modal Footer --}}
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
<!-- Employment Modal End -->

<!-- education Modal Start -->
<div class="modal fade" id="education" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Education</h1>
                    <p class="text-muted modal_pText"> Details like course, university, and more, help recruiters
                        identify your educational background</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="add-education-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Course<span class="text-danger">*</span></label>
                                <input type="text" placeholder="Course Name" name="course"
                                    class="form-control typeText" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">University/Institute<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="University/Institute Name" name="university"
                                    class="form-control" maxlength="120" required>
                            </div>
                        </div>
                        <div class="col-md-12 mb-4">
                            <label class="form-label mb-2">Course type <span class="text-danger">*</span></label>
                            <div class="form-group d-flex gap-3 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="courseTypeFullTime" value="full_time" required>
                                    <label class="form-check-label" for="courseTypeFullTime">
                                        Full Time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="courseTypePartTime" checked value="part_time">
                                    <label class="form-check-label" for="courseTypePartTime">
                                        Part Time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="courseTypeDistance" value="distance">
                                    <label class="form-check-label" for="courseTypeDistance">
                                        Correspondence/Distance learning
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Course duration <span
                                        class="text-danger">*</span></label>
                                <div class="d-flex gap-2">
                                    <select class="form-control selects1" name="start_year">
                                        <option disabled selected class="">Select Ending year</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                    <span><strong class="text-muted p_font">TO</strong></span>
                                    <select class="form-control selects1" name="end_year">
                                        <option disabled selected class="">Select Ending year</option>
                                        <option value="1960">1960</option>
                                        <option value="1961">1961</option>
                                        <option value="1962">1962</option>
                                        <option value="1963">1963</option>
                                        <option value="1964">1964</option>
                                        <option value="1965">1965</option>
                                        <option value="1966">1966</option>
                                        <option value="1967">1967</option>
                                        <option value="1968">1968</option>
                                        <option value="1969">1969</option>
                                        <option value="1970">1970</option>
                                        <option value="1971">1971</option>
                                        <option value="1972">1972</option>
                                        <option value="1973">1973</option>
                                        <option value="1974">1974</option>
                                        <option value="1975">1975</option>
                                        <option value="1976">1976</option>
                                        <option value="1977">1977</option>
                                        <option value="1978">1978</option>
                                        <option value="1979">1979</option>
                                        <option value="1980">1980</option>
                                        <option value="1981">1981</option>
                                        <option value="1982">1982</option>
                                        <option value="1983">1983</option>
                                        <option value="1983">1983</option>
                                        <option value="1984">1984</option>
                                        <option value="1985">1985</option>
                                        <option value="1986">1986</option>
                                        <option value="1987">1987</option>
                                        <option value="1988">1988</option>
                                        <option value="1989">1989</option>
                                        <option value="1990">1990</option>
                                        <option value="1991">1991</option>
                                        <option value="1992">1992</option>
                                        <option value="1993">1993</option>
                                        <option value="1994">1994</option>
                                        <option value="1995">1995</option>
                                        <option value="1996">1996</option>
                                        <option value="1997">1997</option>
                                        <option value="1998">1998</option>
                                        <option value="1999">1999</option>
                                        <option value="2000">2000</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- education Modal End -->

<!-- edit education Modal Start -->
<div class="modal fade" id="edit_Education" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5">Edit Education</h1>
                    <p class="text-muted modal_pText"> Details like course, university, and more, help recruiters
                        identify your educational background</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="edit-education-form">
                    @csrf
                    <div class="row">
                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">Course<span class="text-danger">*</span></label>
                                <input type="text" placeholder="Course Name" name="course"
                                    class="form-control typeText" required>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">
                            <div class="form-group">
                                <label class="form-label mb-0">University/Institute<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="University/Institute Name" name="university"
                                    class="form-control" maxlength="120" required>
                            </div>
                        </div>

                        <div class="col-md-12 mb-4">

                            <label class="form-label mb-2">Course type <span class="text-danger">*</span></label>
                            <div class="form-group d-flex gap-3 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="courseTypeFullTime">
                                    <label class="form-check-label" for="courseTypeFullTime">
                                        Full Time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="courseTypePartTime" checked>
                                    <label class="form-check-label" for="courseTypePartTime">
                                        Part Time
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="course_type"
                                        id="courseTypeDistance">
                                    <label class="form-check-label" for="courseTypeDistance">
                                        Correspondence/Distance learning
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Course duration <span
                                        class="text-danger">*</span></label>
                                <div class="d-flex gap-2">
                                    <select class="form-control selects1" name="start_year">
                                        <option disabled selected>Select starting year</option>
                                        <option>1960</option>
                                        <option>1961</option>
                                        <option>1962</option>
                                        <option>1963</option>
                                        <option>1964</option>
                                        <option>1965</option>
                                        <option>1966</option>
                                        <option>1967</option>
                                        <option>1968</option>
                                        <option>1969</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>1974</option>
                                        <option>1975</option>
                                        <option>1976</option>
                                        <option>1977</option>
                                        <option>1978</option>
                                        <option>1979</option>
                                        <option>1980</option>
                                        <option>1981</option>
                                        <option>1982</option>
                                        <option>1983</option>
                                        <option>1984</option>
                                        <option>1985</option>
                                        <option>1986</option>
                                        <option>1987</option>
                                        <option>1988</option>
                                        <option>1989</option>
                                        <option>1990</option>
                                        <option>1991</option>
                                        <option>1992</option>
                                        <option>1993</option>
                                        <option>1994</option>
                                        <option>1995</option>
                                        <option>1996</option>
                                        <option>1997</option>
                                        <option>1998</option>
                                        <option>1999</option>
                                        <option>2000</option>
                                        <option>2001</option>
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                        <option>2006</option>
                                        <option>2007</option>
                                        <option>2008</option>
                                        <option>2009</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                    </select>
                                    <span><strong class="text-muted p_font">TO</strong></span>
                                    <select class="form-control selects1" name="end_year">
                                        <option disabled selected class="">Select Ending year</option>
                                        <option>1960</option>
                                        <option>1961</option>
                                        <option>1962</option>
                                        <option>1963</option>
                                        <option>1964</option>
                                        <option>1965</option>
                                        <option>1966</option>
                                        <option>1967</option>
                                        <option>1968</option>
                                        <option>1969</option>
                                        <option>1970</option>
                                        <option>1971</option>
                                        <option>1972</option>
                                        <option>1973</option>
                                        <option>1974</option>
                                        <option>1975</option>
                                        <option>1976</option>
                                        <option>1977</option>
                                        <option>1978</option>
                                        <option>1979</option>
                                        <option>1980</option>
                                        <option>1981</option>
                                        <option>1982</option>
                                        <option>1983</option>
                                        <option>1984</option>
                                        <option>1985</option>
                                        <option>1986</option>
                                        <option>1987</option>
                                        <option>1988</option>
                                        <option>1989</option>
                                        <option>1990</option>
                                        <option>1991</option>
                                        <option>1992</option>
                                        <option>1993</option>
                                        <option>1994</option>
                                        <option>1995</option>
                                        <option>1996</option>
                                        <option>1997</option>
                                        <option>1998</option>
                                        <option>1999</option>
                                        <option>2000</option>
                                        <option>2001</option>
                                        <option>2002</option>
                                        <option>2003</option>
                                        <option>2004</option>
                                        <option>2005</option>
                                        <option>2006</option>
                                        <option>2007</option>
                                        <option>2008</option>
                                        <option>2009</option>
                                        <option>2010</option>
                                        <option>2011</option>
                                        <option>2012</option>
                                        <option>2013</option>
                                        <option>2014</option>
                                        <option>2015</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Seve</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
<!--edit education Modal End -->

<!--- add Profile summary start-->
<div class="modal fade" id="profile_summry" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Profile summary</h1>
                    <p class="text-muted modal_pText">Give recruiters a brief overview of the highlights of your
                        career, key achievements, and career goals to help recruiters know your profile better</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="add-profile-summary">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Add Profile summary<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="add profile summary.." name="profile_summary" required></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
        </div>
    </div>
</div>
<!--- add Profile summary end-->

{{-- Edit Profile Summary Start  --}}
<div class="modal fade" id="add_profile_summry" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Profile summary</h1>
                    <p class="text-muted modal_pText">Give recruiters a brief overview of the highlights of your
                        career, key achievements, and career goals to help recruiters know your profile better</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form id="edit-profile-summary">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Update Profile summary<span
                                        class="text-danger">*</span></label>
                                <textarea class="form-control" placeholder="add profile summary.." name="profile_summary"
                                    value="{{ $candidate->profile_summary }}" required></textarea>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Update Profile Summary</button>
            </div>
            </form>
        </div>
    </div>
</div>
{{-- Edit Profile Summary End  --}}

<!--- personal details start-->
<div class="modal fade" id="personal_details" tabindex="-1" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <div>
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Personal
                        details</h1>
                    <p class="text-muted modal_pText">This information is important for
                        employers to know you better</p>
                </div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form>

                    <div class="row">

                        <div class="col-md-7 mb-3">
                            <label class="form-label mb-2">Gender<span class="text-danger">*</span></label>
                            <div class="form-group d-flex gap-3 flex-wrap">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="customOption"
                                        id="customOption1">
                                    <label class="form-check-label" for="customOption1">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="customOption"
                                        id="customOption2" checked>
                                    <label class="form-check-label" for="customOption2">
                                        Femal
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="customOption"
                                        id="customOption3">
                                    <label class="form-check-label" for="customOption3">
                                        Transgender
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-2 ">Have you taken a career
                                    break?<span class="text-danger">*</span></label>

                                <div class="form-group d-flex gap-3 flex-wrap">

                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="career"
                                            id="career_yes">
                                        <label class="form-check-label" for="career_yes">
                                            Yes
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="career"
                                            id="career_no" checked>
                                        <label class="form-check-label" for="career_no">
                                            No
                                        </label>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Date of birth<span
                                        class="text-danger">*</span></label>
                                <input type="date" class="form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Marital Status <span
                                        class="text-danger">*</span></label>
                                <select class="form-control selects1">
                                    <option>Single</option>
                                    <option>Married</option>

                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4">
                            <div class="form-group select2form">
                                <label class="text-dark">Language proficiency</label>
                                <select class="select2 form-control block" multiple="multiple"
                                    style="width: 100%">
                                    <option>Hindi</option>
                                    <option>English</option>
                                </select>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Permanent address<span
                                        class="text-danger">*</span></label>
                                <input type="text" placeholder="Permanent address" class="form-control"
                                    maxlength="60" required>
                            </div>
                        </div>

                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Hometown<span class="text-danger">*</span></label>
                                <input type="text" placeholder="Hometown" class="form-control typeText "
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="form-group">
                                <label class="form-label mb-0">Pincode<span class="text-danger">*</span></label>
                                <input type="number" placeholder="Pincode" class="form-control typeNumber"
                                    required>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Seve</button>
            </div>
        </div>
    </div>
</div>
<!--- personal details end-->
</main>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Slick JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous">
</script>
<!--- select 2-->
{{-- <script src="assets/select2/select2.full.min.js"></script>
 <script src="assets/select2/select2.init.js"></script>
 <script src="assets/select2/select2.min.js"></script> --}}

<script src="{{ asset('assets/frontend/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/frontend/select2/select2.init.js') }}"></script>
<script src="{{ asset('assets/frontend/select2/select2.min.js') }}"></script>
{{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

<!--- sweet alert-->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{ asset('assets/frontend/script/script.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.profiels').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }]
        });

        $('.view_all_job').slick({
            dots: false,
            infinite: true,
            speed: 500,
            slidesToShow: 2,
            slidesToScroll: 1,
            autoplay: false,
            autoplaySpeed: 2000,
            responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            }]
        });
    });
</script>

{{-- <script>
  $(document).ready(function () {
    $('#search_job').on('input', function () {
      let value = $(this).val(); 
      $(this).val(value.replace(/[^a-zA-Z0-9 ]/g, ''));
    });
  });
</script> --}}

<script>
    $(document).ready(function() {
        $('#search_job').on('input', function() {
            let value = $(this).val();
            $(this).val(value.replace(/[^a-zA-Z0-9 ]/g, ''));
        });

        // profile image upload 
        console.log($('#set_profile_image'));



    });
</script>


<script>
    //  $('.select2').select2({
    //      dropdownParent: $('#skill_add'),  
    // });


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

    $(document).ready(function() {
        $('#apply_job').on('click', function() {
            Swal.fire("Apply successfull");
            $(this).prop("disabled", true);
        });

        $('#save_job').on('click', function() {
            Swal.fire({
                title: "Do you want to save this job?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "Save",
                denyButtonText: `Don't save`
            }).then((result) => {

                if (result.isConfirmed) {
                    Swal.fire("Saved!", "", "success");
                } else if (result.isDenied) {
                    Swal.fire("Changes are not saved", "", "info");
                }
            });
        })

    });
</script>

{{-- <script>
    $(document).ready(function () {
        const currentYear = new Date().getFullYear();
        const startYear = 1960;
        const $yearSelects = $('.year-select');

        $yearSelects.each(function () {
            for (let year = startYear; year <= currentYear + 5; year++) {
                $(this).append(`<option value="${year}">${year}</option>`);
            }
        });

        $yearSelects.select2({
            placeholder: "Select Year",
            width: '100%'
        });
    });
</script> --}}

<script>
    $(document).ready(function() {
        $('#year-select').select2();
    });
</script>
@yield('user_profile_modal')

@yield('non-avation')
</body>

</html>
