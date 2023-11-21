<?php

	$hostname="localhost";
	$username= "root";
	$password= "";
	$database="simple_voting_system";

	// UserInput Test
 	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  $data = mysqli_real_escape_string($data);
		  return $data;
	}	

?>