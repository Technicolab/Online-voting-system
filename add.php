<?php

$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "voting";
		
	  $db = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "INSERT INTO vote (candidate,symbol,vote_count)
		VALUES ('".$_POST["name"]."', '".$_POST["symbol"]."','0')";

	    mysqli_query($db, $sql);
		
?>
