<?php

session_start ();

$username = "";
$email = "";

$errors = array();

$db = mysqli_connect('localhost', 'root', '', 'research library') or die("could not connect to the database");


if (isset($_POST['reg_user'])) {
$username = mysqli_real_escape_string($db, $_POST['username']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$track = mysqli_real_escape_string($db, $_POST['track']);
$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);










if(empty($username)) {array_push($errors, "Username is req");}
if(empty($email)) {array_push($errors, "email is req");}
if(empty($password_1)) {array_push($errors, "password is req");}
if($password_1 != $password_2){array_push($errors, "dont math");}



$user_check_query = "SELECT * FROM studinfo WHERE username = '$username' OR email = '$email' LIMIT 1";
$result = mysqli_query($db, $user_check_query);
$user = mysqli_fetch_assoc($result);

if($user) {

	if ($user['username'] === $username){array_push($errors, "Sorry, the username you just<br> Entered is taken.");}
	if ($user['email'] === $email){array_push($errors, "Email Already Exists!");}

}


		if (count($errors) == 0) {
		$password = md5($password_1);
		$query="INSERT INTO studinfo (username , email, password,track) VALUES('$username','$email','$password','$track')";
		mysqli_query($db,$query);
		$_SESSION['username']=$username;
		$_SESSION['success']=$email;
		header('Location: index.php');
	}
}


if(isset($_POST['login_user'])) {
	
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password_1']);

	if(empty($username)){
		array_push($errors, "username is required");
}

	if(empty($password)){
		array_push($errors, "password is required");
}

	if(count($errors) == 0 ) {
		$password=md5($password);
		$query = "SELECT * FROM studinfo WHERE username='$username' AND password='$password' ";
		$results = mysqli_query($db,$query);
		
		if(mysqli_num_rows($results)) {
				$_SESSION['username'] = $username;
				header('location: index.php');
		}
		else{
			array_push($errors, "Wrong input, please try again!");
		}
}

}














?>