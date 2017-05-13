<?php
	 $host="localhost";
	 $dbuser="root";
	 $pass="root";
	 $dbname="online_exam";
	 $conn=mysqli_connect($host,$dbuser,$pass,$dbname);
		// echo "$conn";
		 if(mysqli_connect_errno())
		 {die("connection Failed!".mysqli_connect_error());
		 }
?>
<html>
	<head>
		<title>Listing</title>
	</head>
			<body background="bg/Blue_bg.jpg" text="white">
				<?php
					$sql="SELECT * FROM Student ;"; 
					$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
					else{
						while($row=mysqli_fetch_array($res))
						{
							echo"<br><b>Name:</b>{$row['Name']}<br>".
							"<b>USN:</b>{$row['USN']}<br>".
							"<b>Email:</b>{$row['Email']}<br>".
							"<b>Lastresult:</b>{$row['Lastresult']}<br>".
							
							"-----------------------------------------------------------------------------------------------------------------------------";
						}
						//echo "Table Created Sucessfully";
					}
					
					 
				     
				?>	 
			</body>	
</html>	

<?php
mysqli_close($conn);
//header("Location: Teacher_menu.php");
							//exit;
?>			