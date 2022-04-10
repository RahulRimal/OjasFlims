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
                    Student Admission Form
                    <div class="heading-underline"></div>
                </h3>
            </div>
            <div class="section-body">
                <div class="container h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col">
                            <div class="card card-registration my-4">
                                <div class="card-body p-md-5 text-black">
                                    <form id="admit-form" action="#" method="post">
                                        <h3 class="mb-5 text-uppercas text-center">Please provide the proper
                                            infromation</h3>

                                        <div class="row">
                                            <div class="applicant-info">
                                                <h3 class="custom-font-bold">Applicant's Information</h3>
                                            </div>
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
                                                    <label class="form-label" for="form3Example1n">Middle
                                                        name</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Last
                                                        name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Grand Father's
                                                        name</label>
                                                </div>
                                            </div>

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

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Current
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Permanent
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
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

                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <label for="">DOB</label>
                                                    <input required type="date" id="form3Example9" class="form-control form-control-lg" />
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input type="tel" id="form3Example90" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example90">Phone</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="email" id="form3Example97" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example97">Email ID</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example97" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example97">Nationality</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <select class="form-select form-select-lg">
                                                        <option value="acting">A Positive</option>
                                                        <option value="direction">A Negative</option>
                                                        <option value="writing">A Unknown</option>
                                                        <option value="editing">B Positive</option>
                                                        <option value="mass">B Negative</option>
                                                        <option value="dance">B Unknown</option>
                                                        <option value="editing">AB Positive</option>
                                                        <option value="mass">AB Negative</option>
                                                        <option value="dance">AB Unknown</option>
                                                        <option value="editing">O Positive</option>
                                                        <option value="mass">O Negative</option>
                                                        <option value="dance">O Unknown</option>
                                                        <option value="dance">Unknown</option>
                                                    </select>
                                                    <label class="form-label" for="form3Example99">Blood
                                                        Group</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example99" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example99">City</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example99" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example99">District</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example99" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example99">Academic
                                                        Qualification</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <select class="form-select form-select-lg">
                                                        <option value="acting">Acting</option>
                                                        <option value="direction">Direction</option>
                                                        <option value="writing">Writing</option>
                                                        <option value="editing">Editing</option>
                                                        <option value="mass">Mass Communication</option>
                                                        <option value="dance">Dancing</option>
                                                        <option value="action">Action</option>
                                                    </select>
                                                    <label class="form-label" for="form3Example99">Course</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <select class="form-select form-select-lg" name="" id="">
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
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example99" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example99">Preferred Class
                                                        time</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="applicant-qialification mb-4">
                                                <h3 class="custom-font-bold">Academic Qualification</h3>
                                                <h5 class="custom-font-bold" style="color: var(--primary-color); -webkit-text-stroke: 0.5px black;">
                                                    10<sup>th</sup> Grade</h5>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Institution
                                                        Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Board</label>
                                                </div>
                                            </div>


                                            <div class="form-outline mb-4">
                                                <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Address</label>
                                            </div>



                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Percentage/Grade</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Symbol
                                                        number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Passed
                                                        Year</label>
                                                </div>
                                            </div>


                                            <div class="form-outline mb-4">
                                                <input required type="file" id="" class="form-control form-control-lg" style="width: auto;" />
                                                <label class="form-label" for="form3Example99">SLC
                                                    Certificate</label>
                                            </div>


                                            <div class="applicant-qialification mb-1">
                                                <h5 class="custom-font-bold" style="color: var(--primary-color); -webkit-text-stroke: 0.5px black;">
                                                    12<sup>th</sup> Grade</h5>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Institution
                                                        Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Board</label>
                                                </div>
                                            </div>



                                            <div class="form-outline mb-4">
                                                <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Address</label>
                                            </div>



                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Percentage/Grade</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Symbol
                                                        number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Passed
                                                        Year</label>
                                                </div>
                                            </div>

                                            <div class="applicant-qialification mb-1">
                                                <h5 class="custom-font-bold" style="color: var(--primary-color); -webkit-text-stroke: 0.5px black;">
                                                    Others (if any)</h5>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Institution
                                                        Name</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Board</label>
                                                </div>
                                            </div>



                                            <div class="form-outline mb-4">
                                                <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                <label class="form-label" for="form3Example1n">Address</label>
                                            </div>



                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Percentage/Grade</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Symbol
                                                        number</label>
                                                </div>
                                            </div>
                                            <div class="col-md-4 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Passed
                                                        Year</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="applicant-family-info">
                                                <h3 class="custom-font-bold">Family Information</h3>
                                                <h5 class="custom-font-bold" style="color: var(--primary-color); -webkit-text-stroke: 0.5px black;">
                                                    Father's Information</h5>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Father's
                                                        name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Occupation</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Organization</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1n"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1n">Occupation</label>
                                                        </div>
                                                    </div> -->

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Current
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Permanent
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Telephone
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Mobile
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="email" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Email</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="applicant-family-info">
                                                <h5 class="custom-font-bold" style="color: var(--primary-color); -webkit-text-stroke: 0.5px black;">
                                                    Mother's Information</h5>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Mother's
                                                        name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Occupation</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Organization</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1n"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1n">Occupation</label>
                                                        </div>
                                                    </div> -->

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Current
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Permanent
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Telephone
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Mobile
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="email" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Email</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="applicant-family-info">
                                                <h5 class="custom-font-bold" style="color: var(--primary-color); -webkit-text-stroke: 0.5px black;">
                                                    Guardian's Information (if available)</h5>
                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Guardian's
                                                        name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Occupation</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Organization</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1n"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1n">Occupation</label>
                                                        </div>
                                                    </div> -->

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Current
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Permanent
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Telephone
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Mobile
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="email" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Email</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="applicant-financial-info">
                                                <h3 class="custom-font-bold">Financial's Information</h3>
                                            </div>
                                            <div class="col-md-12">

                                                <h6 class="mb-0 me-4">Relationship with the financial sponsor </h6>

                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" />
                                                    <label class="form-check-label" for="femaleGender">Father</label>
                                                </div>

                                                <div class="form-check form-check-inline mb-0 me-4">
                                                    <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                                                    <label class="form-check-label" for="maleGender">Mother</label>
                                                </div>
                                            </div>

                                            <div class="col-md-12 mb-4">
                                                <div class="row">
                                                    <div class="form-check form-check-inline mb-0"></div>
                                                    <div class="col-md-1">
                                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="otherGender" value="option3" />
                                                        <label class="form-check-label" for="otherGender">Other</label>
                                                    </div>
                                                    <div class="col-md-11 mb-4">
                                                        <input required type="text" id="form3Example99" class="form-control form-control-lg" placeholder="if other, please specify the relationship" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Sponsor's
                                                        name</label>
                                                </div>

                                            </div>
                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1n" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1n">Sponsor's
                                                        Occupation</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline">
                                                    <input required type="text" id="form3Example1m" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example1m">Organization</label>
                                                </div>
                                            </div>
                                            <!-- <div class="col-md-6 mb-4">
                                                        <div class="form-outline">
                                                            <input required type="text" id="form3Example1n"
                                                                class="form-control form-control-lg" />
                                                            <label class="form-label" for="form3Example1n">Occupation</label>
                                                        </div>
                                                    </div> -->

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Current
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="text" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Permanent
                                                        Address</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Telephone
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="tel" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Mobile
                                                        Number</label>
                                                </div>
                                            </div>

                                            <div class="col-md-6 mb-4">
                                                <div class="form-outline mb-4">
                                                    <input required type="email" id="form3Example8" class="form-control form-control-lg" />
                                                    <label class="form-label" for="form3Example8">Email</label>
                                                </div>
                                            </div>
                                        </div>
                                </div>



                                <!-- <div class="form-outline mb-4">
                                        <input required type="text" id="form3Example99"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example99">Languages
                                            known</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input required type="text" id="form3Example97"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Marital
                                            Status</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input required type="text" id="form3Example97"
                                            class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example97">Name of next to
                                            kin (to contact in emergency)</label>
                                    </div> -->

                                <!-- <div class="d-flex justify-content-end pt-3">
                                                    <button type="button" class="btn btn-light btn-lg">Reset
                                                        all</button> -->



                                <div class="row">
                                    <div class="applicant-work-info">
                                        <h3 class="custom-font-bold">Work Experience</h3>
                                    </div>
                                    <div class="col-md-12">

                                        <h6 class="mb-0 me-4 custom-font-bold p-2">Please list and describe the work
                                            experiences you have
                                            earned in the last 5 years in the field of media & film.</h6>

                                    </div>

                                    <div class="amdit-form-work-experience px-5 mb-5">
                                        <textarea name="admit-form-work-experience" id="admit-form-work-experience" cols="30" rows="10">
                                        </textarea>
                                        <Script>
                                            CKEDITOR.replace('admit-form-work-experience');
                                        </Script>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="applicant-medical-info">
                                        <h3 class="custom-font-bold">Medical Information</h3>
                                    </div>
                                    <div class="col-md-12">

                                        <h6 class="mb-0 me-4 custom-font-bold p-2">If you have any medical condition
                                            please disclose in detail. Also please mention the name of the doctor
                                            and his/her contact number.</h6>

                                    </div>

                                    <div class="amdit-form-medical-info px-5 mb-5">
                                        <textarea name="admit-form-work-experience" id="admit-form-medical-info" cols="30" rows="10">
                                        </textarea>
                                        <Script>
                                            CKEDITOR.replace('admit-form-medical-info');
                                        </Script>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="applicant-declaration-and-signature">
                                        <h3 class="custom-font-bold">Declaration and Signature</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-check mx-3">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label custom-font-bold" for="flexCheckDefault">
                                                I hereby declare that the above given information is true and
                                                correct. I understand that the college may cancel the application or
                                                admission if any incorrect or incomplete information is given.
                                                Documents submitted for this application become the property of the
                                                college and will not be returned to me.
                                            </label>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="applicant-marketing-info">
                                        <h3 class="custom-font-bold">Marketing Monitoring</h3>
                                    </div>
                                    <div class="col-md-12">
                                        <h6 class="mb-0 me-4 custom-font-bold px-2">How did you hear about Ojas
                                            Theatre and Films?</h6>
                                        <div class="form-group m-2">
                                            <label for="exampleFormControlInput1">Email address</label>
                                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Newspaper, social media or anything">
                                        </div>
                                    </div>

                                </div>

                                <div class="row p-2">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn form-submit-btn custom-font-bold ">Submit form</button>
                                    </div>
                                </div>

                                </form>
                            </div>


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