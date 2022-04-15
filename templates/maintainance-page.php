<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Ojas Flim Studio</title>

    <link rel="icon" href="<?php echo BASE_URI; ?>assets/img/ojas-logo.png" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="<?php echo BASE_URI; ?>/templates/css/style.css" />

    <!-- lightslider css -->
    <link rel="stylesheet" href="<?php echo BASE_URI; ?>/templates/css/lightslider.css" />

    <!-- Simple lightbox css -->
    <link rel="stylesheet" href="<?php echo BASE_URI; ?>/templates/css/simple-lightbox.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/5.3.45/css/materialdesignicons.css" integrity="sha256-NAxhqDvtY0l4xn+YVa6WjAcmd94NNfttjNsDmNatFVc=" crossorigin="anonymous" />

    <!-- Ckeditor Js -->
    <script src="<?php echo BASE_URI; ?>templates/js/ckeditor/ckeditor.js"></script>

</head>

<body>

    <div id="maintainance-page-hero">
        <div id="maintainance-page-overlay">
            <div class="ojas-logo text-center">
                <img src="<?php echo BASE_URI; ?>assets/img/ojas-logo.PNG" width="200px" height="auto" alt="">
            </div>
            <div class="sizedBox"></div>
            <h3 class="maintainance-page-message custom-font-bold text-center text-white text-uppercase">We're working on something awesome.<br>STAY TUNED!</h3>

            <div id="maintainance-page-email">
                <!-- Maintainance newsletter starts here  -->
<div class="footer-newsletter d-flex justify-content-center text-center text-white mt-5"  style="background-color: transparent!important;">
    <div class="container col-lg-5">
        <div class="newsletter-heading">
            <h3>Join Our Newsletter</h3>
        </div>
        <div class="newsletter-body">
            <h5>Subscribe now to get exciting offers and latest news!!</h5>
        </div>
        <div class="newsletter-form">
            <form action="post">
                <input class="p-1 ps-3" type="email" name="newEmail" id="newsletter-input" placeholder="Enter your email here" />
                <button class="btn btn-sm" type="submit">
                    <strong>Subscribe</strong>
                </button>
            </form>
        </div>
    </div>
</div>
<!-- Maintainance newsletter ends here  -->
            </div>

        </div>
    </div>

</body>

</html>