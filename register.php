<?php

include"db.php";

$f_name = $_POST["f_name"];
$l_name = $_POST["l_name"];
$email = $_POST['email'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$mobile = $_POST['mobile'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$name = "/^[A-Z][a-zA-Z]+$/";
$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
$number = "/^[0-9]+$/";

if(empty($f_name) || empty($l_name) || empty($email) || empty($password) || empty($repassword) || empty($mobile) || empty($address1) || empty($address2)) {
	print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Please fill all fields...</b>
			</div>
		";
	exit();
}else{
	if(!preg_match($name,$f_name)) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This $f_name is not valid</b>
			</div>
		";
	exit();
	}
	if(!preg_match($name,$l_name)) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This $l_name is not valid</b>
			</div>
		";
	exit();
	}
	if(!preg_match($emailValidation,$email)) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>This $email is not valid</b>
			</div>
		";
	exit();
	}
	if(strlen($password) < 9) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password is weak</b>
			</div>
		";
		exit();
	}
	if(strlen($repassword) < 9) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password is weak</b>
			</div>
		";
	exit();
	}
	if($password != $repassword) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Password is not the same</b>
			</div>
		";
	exit();
	}
	if(!preg_match($number, $mobile)) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mobile number $mobile is not valid</b>
			</div>
		";
	exit();
	}
	if(!(strlen($mobile) == 10)) {
		print "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Mobile number $mobile is not 10 digits</b>
			</div>
		";
	exit();
	}
	//existing email address in database
	$sql = "SELECT user_id FROM user_info WHERE email = '$email' LIMIT 1";
	$check_query = mysqli_query ($con, $sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0) {
		print "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>Email Address is already available: Try another email!</b>
			</div>
		";
	}else{
		$password = md5($password);
		$sql = "INSERT INTO `user_info` 
			(`user_id`, `first_name`, `last_name`, `email`, 
			`password`, `mobile`, `address1`, `address2`) 
			VALUES (NULL, '$f_name', '$l_name', '$email', 
			'$password', '$mobile', '$address1', '$address2')";
		$run_query = mysqli_query($con, $sql);
		if($run_query) {
			print "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><b>You are Registered Successfully</b>
				</div>
			";
		}
	}
	
}

?>