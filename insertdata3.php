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
      $mynid = mysqli_real_escape_string($db, $_POST['nid']);
      $mypassword = mysqli_real_escape_string($db, $_POST['password']); 
      $nid=$_POST['nid'];
      $sql = "SELECT * FROM voter WHERE nid = '$mynid' and password = '$mypassword'";
      $result = mysqli_query($db, $sql);
      $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
  // $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count != 1) {
        
     
		  
	
		
         header("location: loginerror.php");
		 	
		
      }
	   else
	   {
		   $sq = "SELECT * FROM votingrecord WHERE nid = '$mynid' ";
      $result1 = mysqli_query($db, $sq);
      $row1 = mysqli_fetch_array($result1, MYSQLI_ASSOC);
  // $active = $row['active'];
      
      $count = mysqli_num_rows($result1);
      
      
		
      if($count == 1) {
        
     
		  

         header("location: votecomplete.php");
		 	
		 //header("location: fourth.php");
      }
	  else
	  {
	  $sql = "INSERT INTO votingrecord (nid)
		VALUES ('".$_POST["nid"]."')";
		
	  mysqli_query($db,$sql);
	   header("location: voteinsert.php");
	  }
	   }
	  
	   
	 

?>

	

			
	 

		 

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
