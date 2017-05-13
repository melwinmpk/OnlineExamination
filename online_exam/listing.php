<?php
	 session_start();
	 $course=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];?>
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
					$sql="SELECT * FROM ".$course; //Q_no, Ques, Op_1, Op_2, Op_3, Op_4, Ans
					$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
					else{
						while($row=mysqli_fetch_array($res))
						{
							echo"<br><b>Q_no:</b>{$row['Q_no']}<br>".
							"<b>QUESTION:</b>{$row['Ques']}<br>".
							"<b>OPTION 1:</b>{$row['Op_1']}<br>".
							"<b>OPTION 2:</b>{$row['Op_2']}<br>".
							"<b>OPTION 3:</b>{$row['Op_3']}<br>".
							"<b>OPTION 4:</b>{$row['Op_4']}<br>".
							"<b>ANSWER is option no :</b>'{$row['Ans']}'<br>".
							"---------------------------------------------------------------------------";
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