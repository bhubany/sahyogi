<?php 

extract($_POST);
$ret_arr=array();

// for Login
if (isset($_POST['loginUsername']) && isset($_POST['loginPassword'])) {
	if (!empty($_POST['loginUsername']) && !empty($_POST['loginPassword'])) {
		echo json_encode(array('success'=>1));
	}else{
	echo json_encode(array('success'=>0));
	}
}

// for Account Verification
if (isset($_POST['accountVerificationOtp'])) {
	if (!empty($_POST['accountVerificationOtp'])) {
		echo json_encode(array('success'=>0));
	}else{
	echo json_encode(array('success'=>0));
	}
}


// // for service provider Registration
if (isset($_POST['serviceProviderFullName'])) {
	if (!empty($_POST['serviceProviderFullName'])) {
		echo json_encode(array('success'=>1));
	}else{
	echo json_encode(array('success'=>0));
	}
}

// // for work request Registration
if (isset($_POST['workRequestFullName'])) {
	if (!empty($_POST['workRequestFullName'])) {
		echo json_encode(array('success'=>1));
	}else{
	echo json_encode(array('success'=>0));
	}
}

// For reset email
if (isset($_POST['resetEmail'])){
	if (!empty($_POST['resetEmail'])) {
		echo json_encode(array('success'=>1));
	}else{
	echo json_encode(array('success'=>0));
	}
}

// For otp
if (isset($_POST['otp'])) {
	if ($_POST['otp']==111111) {
		echo json_encode(array('success'=>1));
	}else{
		echo json_encode(array('success'=>0));
	}
}

// For saving new password
if (isset($_POST['newPassword']) && isset($_POST['conformPassword'])){
	if ($_POST['newPassword']==$_POST['conformPassword']) {
		echo json_encode(array('success'=>1));
	}else{
	echo json_encode(array('success'=>0));
}
}
// echo json_encode($ret_arr);
exit();








 ?>