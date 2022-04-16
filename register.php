<?php require('core/init.php'); ?>

<?php

$template = new Template('templates/registration-page.php');



if (isset($_POST['registerSubimt'])) {
    $data = array();
    $data['firstName'] = $_POST['firstName'];
    $data['lastName'] = $_POST['lastName'];
    $data['mother'] = $_POST['mother'];
    $data['father'] = $_POST['father'];
    $data['grandFather'] = $_POST['grandFather'];
    $data['currentAddress'] = $_POST['currentAddress'];
    $data['permanentAddress'] = $_POST['permanentAddress'];
    $data['gender'] = $_POST['gender'];
    $data['phone'] = $_POST['phone'];
    $data['email'] = $_POST['email'];
    $data['academicQualification'] = $_POST['academicQualification'];
    $data['course'] = $_POST['course'];
    $data['duration'] = $_POST['duration'];
    $data['classTime'] = $_POST['classTime'];
    $data['languageKnown'] = $_POST['languageKnown'];
    $data['maritalStatus'] = $_POST['maritalStatus'];
    $data['nameOfKin'] = $_POST['nameOfKin'];

    //Required Fields
	$field_array = array('firstName','lastName','currentAddress','permanentAddress', 'phone', 'email','course','duration','classTime');
	

	// if($validate->isRequired($field_array)){
	// 	if($validate->isValidEmail($data['email'])){
	// 		//Upload Avatar Image
    //         if($uploadAvatar()){
    //             $data['avatar'] = $_FILES["avatar"]["name"];
    //         }else{
    //             $data['avatar'] = 'noimage.png';
    //         }
    //         //Register User
    //         if($user->register($data)){
    //             redirect('index.php', 'You are registered and can now log in', 'success');
    //         } else {
    //             redirect('index.php', 'Something went wrong with registration', 'error');
    //         }
	// 	} else {
	// 		redirect('register.php', 'Please use a valid email address', 'error');
	// 	}
	// } else {
	// 	redirect('register.php', 'Please fill in all required fields', 'error');
	// }

    // the message
    $msg = 'Name:  '. $data['firstName'] . $data['lastName'] . '\n Gender'. $data['gender'] .'\n Mother\'s Name:  ' . $data['mother']. '\n Father\'s Name:  '.$data['father'] . '\n GrandFather\'s Name:  '.$data['grandFather'] . '\n Current Address:  '.$data['currentAddress'] . '\n Permanent Address:  '.$data['permanentAddress'] . '\n Phone:  '.$data['phone'] . '\n Email:  '.$data['email'] . '\n Academic Qualification:  '.$data['academicQualification'] . '\n Course:  '.$data['course'] . '\n Duration:  '.$data['duration'] . '\n Class Time:  '.$data['classTime'] . '\n Language Known:  '.$data['languageKnown'] . '\n Marital Status:  '.$data['maritalStatus'] . '\n Name of Kin:  '.$data['nameOfKin'] .'\n';
    
    $msg = wordwrap($msg, 70);

    // send email
    mail(REGISTER_MAIL, 'New Registration', $msg);
}








echo $template;

?>