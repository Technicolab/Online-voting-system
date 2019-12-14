<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "voting";

	
		$conn = mysqli_connect($servername, $username, $password, $dbname);
	
		if (!$conn) {
			die("Connection failed: " . mysqli_connect_error());
		}
		$d =0;
		$sql = "INSERT INTO voter (name,nid,address,password)
		VALUES ('".$_POST["name"]."', '".$_POST["nid"]."','".$_POST["address"]."',
		'".$_POST["password_1"]."')";

	    mysqli_query($conn, $sql);
			
		

		mysqli_close($conn);

		header("Location: Homepage.php");
?>