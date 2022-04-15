<?php include('includes/header.php'); ?>

<main>
    <!-- main wide content starts here  -->

    <div class="main-wide-content container-fluid">

        <!-- Register section starts here -->
        <section id="map-section">

            <div class="section-body">

            </div>
        </section>

        <section id="new-register-section" class="h-100 mt-5">
            <div class="section-top">
                <h3 class="heading">
                    Register for new Courses
                    <!-- <div class="heading-underline"></div> -->
                </h3>
            </div>
            <div class="section-body">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card card-registration my-4">
                                <form id="register-form" action="<?php echo BASE_URI; ?>register.php" method="post">
                                    <div class="row g-0 pb-5">
                                        <div class="col-xl-6 d-none d-xl-block">
                                            <img src="https://cdn.pixabay.com/photo/2020/05/09/13/29/photographer-5149664_1280.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />

                                            <div class="registration-questions my-5">
                                                <h4 class="text-center custom-font-bold">Other Details</h4>
                                            </div>
                                            <div class="imp-questions px-5">
                                                <label class="pb-3  custom-font-bold" for="what-is-acting-for-you">What
                                                    is acting for
                                                    you? <span class="required-symbol">*</span></label><br>
                                                <textarea class="p-2 custom-text-area" name="what-is-acting-for-you-answer" cols="55" rows="10" required></textarea>

                                                <label class="pb-3 mt-5 custom-font-bold" for="what-is-acting-for-you">Why do you want to learn
                                                    acting? <span class="required-symbol">*</span></label><br>
                                                <textarea class="p-2 custom-text-area" name="what-is-acting-for-you-answer" cols="55" rows="10" required></textarea>

                                                <label class="pb-3 mt-5 custom-font-bold" for="what-is-acting-for-you">Do you want any extra
                                                    training? <span class="required-symbol">*</span></label><br>
                                                <textarea class="p-2 custom-text-area" placeholder="Example: Dance, Action, etc." name="what-is-acting-for-you-answer" cols="55" rows="10" required></textarea>

                                            </div>

                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card-body p-md-5 text-black">
                                                <h3 class="mb-5 text-uppercase">Course registration form</h3>

                                                <div class="row">
                                                    
                                                <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="firstName" name="firstName" class="form-control form-control-lg" />
                                                            <label class="form-label" for="firstName">First
                                                                name <span class="required-symbol">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="lastName" name="lastName" class="form-control form-control-lg" />
                                                            <label class="form-label" for="lastName">Last
                                                                name <span class="required-symbol">*</span></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="mother" name="mother" class="form-control form-control-lg" />
                                                            <label class="form-label" for="mother">Mother's
                                                                name <span class="required-symbol">*</span></label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="father" name="father" class="form-control form-control-lg" />
                                                            <label class="form-label" for="father">Father's
                                                                name <span class="required-symbol">*</span></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="grandFather" name="grandFather" class="form-control form-control-lg" />
                                                    <label class="form-label" for="grandFather">GrandFather's
                                                        name <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="currentAddress" name="currentAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="currentAddress">Current
                                                        Address <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="permanentAddress" name="permanentAddress" class="form-control form-control-lg" />
                                                    <label class="form-label" for="permanentAddress">Permanent
                                                        Address <span class="required-symbol">*</span></label>
                                                </div>
                                                <div class="col-md-6 mb-4">


                                                </div>

                                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">
                                                    <h6 class="mb-0 me-4">Gender: </h6>
                                                    

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" checked/>
                                                        <label class="form-check-label" for="maleGender">Male</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                                                        <label class="form-check-label" for="femaleGender">Female</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0">
                                                        <input class="form-check-input" type="radio" name="gender" id="otherGender" value="others" />
                                                        <label class="form-check-label" for="otherGender">Other</label>
                                                    </div>

                                                </div>

                                                <!-- <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                    <h6 class="mb-0 me-4">Gender: </h6>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="gender" id="maleGender" value="male" checked/>
                                                        <label class="form-check-label" for="maleGender">Male</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="gender" id="femaleGender" value="female" />
                                                        <label class="form-check-label" for="femaleGender">Female</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0">
                                                        <input class="form-check-input" type="radio" name="gender" id="otherGender" value="other" />
                                                        <label class="form-check-label" for="otherGender">Other</label>
                                                    </div>

                                                </div> -->

                                                <div class="form-outline mb-4">
                                                    <input required type="date" id="dob" name="dob" class="form-control form-control-lg" />
                                                    <label class="form-label" for="dob">DOB <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="tel" id="phone" name="phone" class="form-control form-control-lg" />
                                                    <label class="form-label" for="phone">Phone <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="email" name="email" class="form-control form-control-lg" />
                                                    <label class="form-label" for="email">Email ID <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="academicQualification" name="academicQualification" class="form-control form-control-lg" />
                                                    <label class="form-label" for="academicQualification">Academic
                                                        Qualification <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5 mb-4">
                                                        <div class="form-outline">
                                                            <!-- <input required type="text" id="form3Example99"
                                                                class="form-control form-control-lg" /> -->
                                                            <select class="form-select" name="course" id="course">
                                                                <option value="acting">Acting</option>
                                                                <option value="direction">Direction</option>
                                                                <option value="writing">Script Writing</option>
                                                                <option value="editing">Editing</option>
                                                                <option value="publicSpeaking">Public Speaking</option>
                                                                <option value="modeling">Modeling</option>
                                                                <option value="producer">Producer</option>
                                                                <option value="singing">Singing</option>
                                                                <option value="dacing">Dancing</option>
                                                                <option value="action">Action</option>
                                                            </select>
                                                            <label class="form-label" for="course">Course</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mb-4">
                                                        <div class="form-outline">
                                                            <!-- <input required type="text" id="form3Example99"
                                                                class="form-control form-control-lg" /> -->

                                                            <select class="form-select" name="duration" id="duration">
                                                                <option value="3">3 Months</option>
                                                                <option value="6">6 Months</option>
                                                                <option value="12">12 Months</option>
                                                                <option value="15">15 Months</option>
                                                                <option value="18">18 Months</option>
                                                                <option value="24">24 Months</option>
                                                            </select>
                                                            <label class="form-label" for="form3Example99">Preferred
                                                                Course Duration <span class="required-symbol">*</span></label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="classTime" name="classTime" class="form-control form-control-lg" />
                                                    <label class="form-label" for="classTime">Preferred Class
                                                        time <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="languageKnown" name="languageKnown" class="form-control form-control-lg" />
                                                    <label class="form-label" for="languageKnown">Languages
                                                        known <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="maritalStatus" name="maritalStatus" class="form-control form-control-lg" />
                                                    <label class="form-label" for="maritalStatus">Marital
                                                        Status <span class="required-symbol">*</span></label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="nameOfKin" name="nameOfKin" class="form-control form-control-lg" />
                                                    <label class="form-label" for="nameOfKin">Name of next to
                                                        kin (to contact in emergency) <span class="required-symbol">*</span></label>
                                                </div>

                                                <!-- <div class="d-flex justify-content-end pt-3">
                                                    <button type="button" class="btn btn-light btn-lg">Reset
                                                        all</button> -->
                                                <button type="submit" name="registerSubimt" class="btn form-submit-btn">Request for
                                                    Regestration</button>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>

    <!-- Register section ends here -->

    <div class="sizedBox"></div>

    </div>

    <!-- main wide content ends here  -->

    <!-- main narrow content starts here  -->

    <div class="main-content container mt-5"></div>

    <!-- main narrow content ends here  -->
</main>

<?php include('includes/footer.php'); ?>