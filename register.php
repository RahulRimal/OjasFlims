<?php require('core/init.php'); ?>

<?php

$template = new Template('templates/registration-page.php');



if (isset($_POST['registerSubimt'])) {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $mother = $_POST['mother'];
    $father = $_POST['father'];
    $grandFather = $_POST['grandFather'];
    $currentAddress = $_POST['currentAddress'];
    $permanentAddress = $_POST['permanentAddress'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $academicQualification = $_POST['academicQualification'];
    $course = $_POST['course'];
    $duration = $_POST['duration'];
    $classTime = $_POST['classTime'];
    $languageKnown = $_POST['languageKnown'];
    $maritalStatus = $_POST['maritalStatus'];
    $nameOfKin = $_POST['nameOfKin'];




    // the message
    $msg = 'Name:  '.$firstName . $lastName . '\n Gender'. $gender .'\n Mother\'s Name:  '.$mother . '\n Father\'s Name:  '.$father . '\n GrandFather\'s Name:  '.$grandFather . '\n Current Address:  '.$currentAddress . '\n Permanent Address:  '.$permanentAddress . '\n Phone:  '.$phone . '\n Email:  '.$email . '\n Academic Qualification:  '.$academicQualification . '\n Course:  '.$course . '\n Duration:  '.$duration . '\n Class Time:  '.$classTime . '\n Language Known:  '.$languageKnown . '\n Marital Status:  '.$maritalStatus . '\n Name of Kin:  '.$nameOfKin .'\n';
    
    $msg = wordwrap($msg, 70);

    // send email
    mail(REGISTER_MAIL, 'New Registration', $msg);
}








echo $template;

?>