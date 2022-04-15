<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ojas Theatre and Flim Studio</title>

    <link rel="icon" href="<?php echo BASE_URI;?>assets/img/ojas-logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo BASE_URI;?>/templates/css/style.css" />

    <!-- lightslider css -->
    <link rel="stylesheet" href="<?php echo BASE_URI;?>/templates/css/lightslider.css" />

    <!-- Simple lightbox css -->
    <link rel="stylesheet" href="<?php echo BASE_URI;?>/templates/css/simple-lightbox.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <!-- Ckeditor Js -->
    <script src="<?php echo BASE_URI;?>templates/js/ckeditor/ckeditor.js"></script>

</head>

<body>
    <!-- Top bar starts here  -->

    <section id="top-bar">
        <div class="container">
            <div class="row">
                <div class="top-bar-content d-flex justify-content-between justify-content-lg-between px-3 px-lg-0">
                    <div class="topbar-mail">
                        <p>mail@ojasflims.com</p>
                    </div>
                    <div class="topbar-links">
                        <a href="#"><i class="fa fa-facebook-official pe-3" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-envelope pe-3" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top bar ends here  -->

    <!-- Header starts here -->

    <header id="header" class="sticky-top">
        <nav class="main-navbar navbar navbar-expand-lg navbar-dark">
            <div class="container-md" style="background-color: var(--primary-bg-color); width: 100%; height: 100px;">
                <a class="navbar-brand" href="#">
                    <img src="assets/img/ojas-logo.png" height="auto" width="125px" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse p-3" id="navbarSupportedContent"
                    style="background-color: var(--primary-bg-color);">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active d-flex flex-column align-items-center" href="#">
                                <i class="fas fa-book-open" aria-hidden="true"></i>Courses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="#">
                                <i class="fa fa-trophy" aria-hidden="true"></i>Achivements and
                                Events</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="pics.php">
                                <i class="fa fa-images"></i>Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link d-flex flex-column align-items-center" href="contact.php"><i
                                    class="fa fa-headphones"></i>Contact Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle d-flex flex-column align-items-center" href="#"
                                id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                                    class="fa fa-graduation-cap"></i>New Admission
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Acting Course</a></li>
                                <li><a class="dropdown-item" href="#">Direction Class</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Upcoming Classes</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <form class="form-inline d-flex d-md-flex" role="form">
                        <div class="input-group">
                            <input type="text" class="form-control shadow-none" placeholder="Search"
                                aria-label="SearchHere" aria-describedby="basic-addon2" />
                            <div class="input-group-append">
                                <button class="search-btn btn" type="button">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <!-- Header ends here -->

    <!-- Hero Starts Here  -->

    <!-- <section id="hero">
        <div class="container col-xxl-8 px-4 py-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6">
                    <img src="https://cdn.pixabay.com/photo/2020/01/21/20/44/mountains-4783955__340.jpg"
                        class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="300"
                        loading="lazy">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-5 fw-bold lh-1 mb-3">Responsive left-aligned hero with image</h1>
                    <p class="lead">Quickly design and customize responsive mobile-first sites with Bootstrap, the
                        world’s most popular front-end open source toolkit, featuring Sass variables and mixins,
                        responsive grid system, extensive prebuilt components, and powerful JavaScript plugins.</p>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                        <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primary</button>
                        <button type="button" class="btn btn-outline-secondary btn-lg px-4">Default</button>
                    </div>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Hero ends here -->