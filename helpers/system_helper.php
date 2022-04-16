<?php
/*
 * Redirect To Page
*/
function redirect($page = FALSE, $message = NULL, $message_type = NULL) {
	if (is_string ($page)) {
		$location = $page;
	} else{
		$location = $_SERVER ['SCRIPT_NAME'];
	}

	//Check For Message
	if($message != NULL){
		//Set Message
		$_SESSION['message'] = $message;
	}
	//Check For Type
	if($message_type != NULL){
		//Set Message Type
		$_SESSION['message_type'] = $message_type;
	}

	//Redirect
	header ('Location: '.$location);
	exit;
}

/*
 * Display Message
 */
function displayMessage(){
	if(!empty($_SESSION['message'])) {
		
		//Assign Message Var
		$message = $_SESSION['message'];
			
		if(!empty($_SESSION['message_type'])) {
			//Assign Type Var
			$message_type = $_SESSION['message_type'];
			//Create Output
			if ($message_type == 'error') {
				echo '<div class="custom-alert alert-danger text-center" style="text-decoration: white; font-size: 20px; font-weight: 600; height: 50px; line-height: 50px;">' . $message . '</div>';
			} else {
				echo '<div class="custom-alert alert-success text-center" style="text-decoration: white; font-size: 20px; font-weight: 600; height: 50px; line-height: 50px;">' . $message . '</div>';
			}
		}
		//Unset Message
		unset($_SESSION['message'] );
		unset($_SESSION['message_type'] );
	} else {
		echo '';
	}
}

/*
 * Check If User Is Logged In
 */
function isLoggedIn(){
	if(isset($_SESSION['is_logged_in'])){
		return true;
	} else {
		return false;
	}
}

/*
 * Get Logged In User Info
*/
function getUser(){
	$userArray = array();
	$userArray['user_id'] = $_SESSION['user_id'];
	$userArray['username'] = $_SESSION['username'];
	$userArray['name'] = $_SESSION['name'];
	return $userArray;
}

/*
	 * Upload User Avatar
	 */
	function uploadAvatar(){
		$allowedExts = array("gif", "jpeg", "jpg", "png");
		$temp = explode(".", $_FILES["avatar"]["name"]);
		$extension = end($temp);
		if ((($_FILES["avatar"]["type"] == "image/gif")
				|| ($_FILES["avatar"]["type"] == "image/jpeg")
				|| ($_FILES["avatar"]["type"] == "image/jpg")
				|| ($_FILES["avatar"]["type"] == "image/pjpeg")
				|| ($_FILES["avatar"]["type"] == "image/x-png")
				|| ($_FILES["avatar"]["type"] == "image/png"))
				&& ($_FILES["avatar"]["size"] < 100000)
				&& in_array($extension, $allowedExts)) {
			if ($_FILES["avatar"]["error"] > 0) {
				redirect('register.php', $_FILES["avatar"]["error"], 'error');
			} else {
				if (file_exists("images/students/avatars/" . $_FILES["avatar"]["name"])) {
					redirect('register.php', 'File already exists', 'error');
				} else {
					move_uploaded_file($_FILES["avatar"]["tmp_name"],
					"images/students/avatars/" . $_FILES["avatar"]["name"]);
					
					return true;
				}
			}
		} else {
			redirect('register.php', 'Invalid File Type!', 'error');
		}
	}