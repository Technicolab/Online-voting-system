<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<
   
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>


   
</head>
<body>

<script>
				function validateForm() {
					var nm 	= document.forms['Form1']['name'].value,
					id     = document.forms['Form1']['nid'].value,
			        ad=document.forms['Form1']['address'].value,
				
				
					pw1      = document.forms['Form1']['password_1'].value,
					
					pw2 		= document.forms['Form1']['password_2'].value;
				if (id ==null || pw1==null || id =="" || pw1==""||nm ==null || ad==null || nm =="" || ad==""  ||
			 pw2==null || pw2 ==""||pw2!=pw1) {
					alert("Please enter information correctly!!");
					return false;
				}
				
					else
						
						{return true;}
				}
		
	    </script>
	
		
				<!-- slide end-->
				<!--main content started-->
		  
<div class="container">
		<div class="row" >
			
				
					<div class="col-md-4">
					</div>
					<div class="col-md-4" >
					
					
	   <div class="regForm"  > 
        <h1> Registration </h1>
        <form  action="insertdata2.php" method="post" name="Form1"  onsubmit="return validateForm();">
          <div class="form-group">
            <label >Name</label>
            <input type="text" class="form-control" placeholder="Name" name="name" >
            
          </div>

          <div class="form-group ">
            <label>NID</label>
            <input type="text" class="form-control"  placeholder="Enter your NID" name="nid">
            
          </div>

          <div class="form-group ">
            <label>Address</label>
            <input type="text" class="form-control"  placeholder="Enter your address" name="address">
            
          </div>
           
          

          <div class="form-group ">
            <label >Password</label>
            <input type="Password" class="form-control"  placeholder="Enter Password" name="password_1">
            
          </div>    
          <div class="form-group ">
            <label > Confirm Password</label>
            <input type="Password" class="form-control"  placeholder="Enter Password" name="password_2">
            
          </div>    
          <button class="btn btn-primary">Creat Account</button>
        </form> 
     </div>

			
	</div>
</div>

</div>
	
    



	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $('#content').toggleClass('active');
            });
        });
    </script>
</body>
</html>