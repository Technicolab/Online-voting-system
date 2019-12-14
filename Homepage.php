<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
		<style>
			body  {
			  background: url("image1.jpg");
			  background-repeat: no-repeat;
			  background-size: 100% 700px;
			}
        </style>
    </head>
    <body>
	
        <h1 style="color:white; text-align:center; ">ONLINE VOTING SYSTEM</h1>
		<br><br><br><br>
	
        <br><br><br><div class="container">
		<div class="row">
			
				
					<div class="col-md-3">
					<form style="color:red;" method="post" action="registration1.php" >
					
					<input type="submit" value="REGISTRATION"/>
					</form>
					</div>
					<div class="col-md-3">
					<form style="color:red;" method="post" action="login1.php" >
					
					<input type="submit" value=" VOTE"/>
					</form>
					</div>
					
					<div class="col-md-3">
					<form style="color:red;" method="post" action="result.php" >
					
					<input type="submit"  value="CURRENT RESULT"/>
					</form>
					</div>
					<div class="col-md-3">
					<form style="color:red;" method="post" action="admin.php" >
					
					<input type="submit"  value="ADMIN"/>
					</form>
					</div>
					 
				   
				
						
					</div>
				</div>
			
      
		
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>