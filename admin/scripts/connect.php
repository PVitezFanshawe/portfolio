<?php
// This will connect to the database

// Set up connection credentials

	$user = "root";
	$pass = ""; // FOR PC ONLY
//	$pass = "root"; FOR MAC ONLY
	$url = "localhost";
	$db = "db_portfolio";

	// Creates an access package to our database
	$link = mysqli_connect($url, $user, $pass, $db); // "8888" needed on MAC

	// Check Connection w/ error message
	if(mysqli_connect_errno()) {
		echo 'Failed to connect to mySQL'. mysqli_connect_error();
		exit(); // forces an exit just incase things get caught in a loop
	}

 ?>
