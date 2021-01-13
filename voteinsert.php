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
	  ?>
	   <br><br><br><div class="container">
	
		<div class="row">
	<div class="col-md-4">
	
	</div>
	
  
  <div class="col-md-4">
  

  <h1 style="color:white">click one</h1><br>
  
   
			
					
				
					 <form action="votecast.php" method="POST">
        <?php
		 $sq = "SELECT * FROM vote";

				mysqli_query($db,$sq);

				$result1 = $db->query($sq);
				

				 while($row = $result1->fetch_assoc())
				 {
					
                ?>
                    <input type="submit" name="symbol" value="<?php echo $row["symbol"]; ?>"/>
                <?php

                echo "<br>";
				echo "<br>";
				
            }
        ?>
    </form>
					
	   
					
					
					
					
			
				
					</div>
	
	
	<div class="col-md-4">
	</div>

		
	  </div>
	</div>
	
		

			
	 

		 

 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
// mesbaul hasan