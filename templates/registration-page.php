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
                                <form id="register-form" action="#" method="post">
                                    <div class="row g-0 pb-5">
                                        <div class="col-xl-6 d-none d-xl-block">
                                            <img src="https://cdn.pixabay.com/photo/2020/05/09/13/29/photographer-5149664_1280.jpg" alt="Sample photo" class="img-fluid" style="border-top-left-radius: .25rem; border-bottom-left-radius: .25rem;" />

                                            <div class="registration-questions my-5">
                                                <h4 class="text-center custom-font-bold">Other Details</h4>
                                            </div>
                                            <div class="imp-questions px-5">
                                                <label class="pb-3  custom-font-bold" for="what-is-acting-for-you">What
                                                    is acting for
                                                    you?</label><br>
                                                <textarea class="p-2 custom-text-area" name="what-is-acting-for-you-answer" cols="70" rows="10"></textarea>

                                                <label class="pb-3 mt-5 custom-font-bold" for="what-is-acting-for-you">Why do you want to learn
                                                    acting?</label><br>
                                                <textarea class="p-2 custom-text-area" name="what-is-acting-for-you-answer" cols="70" rows="10"></textarea>

                                                <label class="pb-3 mt-5 custom-font-bold" for="what-is-acting-for-you">Do you want any extra
                                                    training?</label><br>
                                                <textarea class="p-2 custom-text-area" placeholder="Example: Dance, Action, etc." name="what-is-acting-for-you-answer" cols="70" rows="10"></textarea>

                                            </div>

                                        </div>
                                        <div class="col-xl-6">
                                            <div class="card-body p-md-5 text-black">
                                                <h3 class="mb-5 text-uppercase">Course registration form</h3>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1m">First
                                                                name</label>
                                                        </div>

                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1n">Last
                                                                name</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1m1" class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1m1">Mother's
                                                                name</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1n1">Father's
                                                                name</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example1n1" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n1">Gradn Father's
                                                        name</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Current
                                                        Address</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Permanent
                                                        Address</label>
                                                </div>

                                                <div class="d-md-flex justify-content-start align-items-center mb-4 py-2">

                                                    <h6 class="mb-0 me-4">Gender: </h6>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                                                        <label class="form-check-label" for="femaleGender">Female</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0 me-4">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                                        <label class="form-check-label" for="maleGender">Male</label>
                                                    </div>

                                                    <div class="form-check form-check-inline mb-0">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                                        <label class="form-check-label" for="otherGender">Other</label>
                                                    </div>

                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="date" id="form3Example9" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example9">DOB</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="tel" id="form3Example90" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example90">Phone</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example97" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example97">Email ID</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example99" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example99">Academic
                                                        Qualification</label>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-5 mb-4">
                                                        <div class="form-outline">
                                                            <!-- <input required type="text" id="form3Example99"
                                                                class="form-control form-control-lg" /> -->
                                                            <select class="form-select" name="" id="">
                                                                <option value="">Acting</option>
                                                                <option value="">Direction</option>
                                                                <option value="">Script Writing</option>
                                                                <option value="">Editing</option>
                                                                <option value="">Public Speaking</option>
                                                                <option value="">Modeling</option>
                                                                <option value="">Producer</option>
                                                                <option value="">Singing</option>
                                                                <option value="">Dancing</option>
                                                                <option value="">Action</option>
                                                            </select>
                                                            <label class="form-label" for="form3Example99">Course</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-7 mb-4">
                                                        <div class="form-outline">
                                                            <!-- <input required type="text" id="form3Example99"
                                                                class="form-control form-control-lg" /> -->

                                                            <select class="form-select" name="" id="">
                                                                <option value="">3 Months</option>
                                                                <option value="">6 Months</option>
                                                                <option value="">12 Months</option>
                                                                <option value="">15 Months</option>
                                                                <option value="">18 Months</option>
                                                                <option value="">24 Months</option>
                                                            </select>
                                                            <label class="form-label" for="form3Example99">Preferred
                                                                Course Duration</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example99" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example99">Preferred Class
                                                        time</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example99" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example99">Languages
                                                        known</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example97" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example97">Marital
                                                        Status</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example97" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example97">Name of next to
                                                        kin (to contact in emergency)</label>
                                                </div>

                                                <!-- <div class="d-flex justify-content-end pt-3">
                                                    <button type="button" class="btn btn-light btn-lg">Reset
                                                        all</button> -->
                                                <button type="submit" class="btn form-submit-btn">Request for
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