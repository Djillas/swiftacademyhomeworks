<?php
	session_start();

	if(!isset($_GET['id']) || empty($_GET['id'])) {
		header('Location: search.php');
	}
	
	// Check if the user is logged into the system
	require_once "validate.php";
	require_once "src/header.php";
	require_once "src/mainmenu.php";

	require_once 'db.php';
	
	echo "<fieldset><legend>User Information</legend>";

	$id = $_GET['id'];	
	$sql = "SELECT * FROM  users WHERE id =$id;";
	$result = $mysqli->query($sql);
$num_rows = $result->num_rows;
	if ($result == false) {
		echo "<p>Error: cannot execute query</p>";
	}
	else {
		if ($num_rows >= 1) {
					while($row = mysqli_fetch_array($result)) echo "<p>";
			echo "<b>Name:</b> " . $row["name"] . "<br />";
				echo "<b>Date of birth:</b> " . $row["date_of_birth"] . "<br />";
			echo "<b>Date of registration:</b> " . $row["date_of_reg"] . "<br />";
			echo "<b>Email:</b> " . $row["email"] . "<br />";
			echo "<b>Information:</b> " . $row["info"];
				echo "</p>";

			}

		else {
			echo "<p>No user</p>";
		}
	}
	
	//close($link);
	
	echo "</fieldset>";
	
	require_once "src/footer.php";
?>