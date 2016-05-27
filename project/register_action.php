<?php
$email = $_POST['email'];
	$password1 = md5($_POST['password1']);
$password2 = md5($_POST['password2']);
 	$name = $_POST['name'];
 	$date_of_birth = $_POST['date_of_birth'];
 	$info = $_POST['info'];
	if ($password1 != $password2) {require_once "src/header.php";
		require_once "src/mainmenu.php";
 		echo '<p>Error: password does not match. Try again</a>';
 		echo '<p><a href="register.php">Try again</p>';
 		require_once "src/footer.php";
 		exit;
 	}

 	$sql = "INSERT INTO users (name, info, date_of_birth, email, password) VALUES ('$name', '$info', '$date_of_birth', '$email', '$password1');";
 	//$result = $mysqli->query($sql);
 	if ($result === false) {
	 		require_once "src/header.php";
	require_once "src/mainmenu.php";
 		echo '<p>Error: wrong name or/and password</p>';
 		echo '<p><a href="register.php">Try again</a></p>';
 		require_once "src/footer.php";
 		exit;
 	}
 	else {
	 		header('Location: login.php');
 	}



?>



















