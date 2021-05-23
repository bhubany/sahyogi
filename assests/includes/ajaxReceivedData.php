<?php 

extract($_POST);
$ret_arr=array();

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