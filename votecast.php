
        <?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "voting";
		
	  $conn = mysqli_connect($servername, $username, $password, $dbname);
 $sq = "SELECT * FROM vote";

				mysqli_query($conn,$sq);

				$result1 = $conn->query($sq);
				$n=0;

				 while($row = $result1->fetch_assoc())
				 {
					 if($row["symbol"]==$_POST["symbol"])
					 {
						 $n=1;
						 $count=$row["vote_count"]+1;
						
					 break;}
				 }
				 if($n==1)
				 {
					 $sql= "UPDATE `vote` SET `vote_count`=$count WHERE `symbol`='".$_POST['symbol']."'" ;
					 mysqli_query($conn,$sql);
				mysqli_close($conn);
					header("Location: confirm.php");
				
				 }
		?>