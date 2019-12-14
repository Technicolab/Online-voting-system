<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title></title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
	
	.cost{
		background:white;
	}
		
	</style>
  </head>
  <body style="background:black">
  <?php
   
        $servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "voting";
		
	  $db = mysqli_connect($servername, $username, $password, $dbname);
      $mymail = mysqli_real_escape_string($db, $_POST['email']);
      $mypassword = mysqli_real_escape_string($db, $_POST['password']); 
      $email=$_POST['email'];
      $sql = "SELECT * FROM admin WHERE email = '$mymail' and password = '$mypassword'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count != 1) {
        
     
		  
	
		
         header("location: loginerror1.php");
		 	
		
      }
	   
	else
	{
		 header("location: adminhome.php");
	}
	 

?>

	 
		
		
	
		

			
	 

		 

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
