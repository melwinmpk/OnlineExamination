<?php
	 session_start();
	 $course=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];?>
<html>
	<head>
		<title>Deleting a question</title>
	</head>
			
			<body background="bg/Blue_bg.jpg" text="white">
				<form action="Delete_q.php" method="POST">
				    Enter the question no which is to be deleted from the data base<br>
                    Question_no:<input type="text" name="Q_no" maxlength="20" size="20"><br>
					<!--course:<input type="text" name="course" maxlength="20" size="20"><br>-->
				 <td><input type="submit" name="submit" value="submit"/></td>
				</form>
			</body>	
</html>	


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

<?php
						if(isset($_POST['submit']))
						{
							// $USN=$_POST['USN'];
							$Q_no=$_POST['Q_no'];
							//$course=$_POST['course'];
						
						$sql="DELETE FROM ".$course." WHERE Q_no='{$Q_no}'";
						//echo "{$sql}";
						$res=mysqli_query($conn,$sql);
						echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
						
					}
					else{
						echo "Question Deleted Sucessfully";
						$sql="ALTER TABLE ".$course." DROP Q_no;";
					$res=mysqli_query($conn,$sql);
					$sql="ALTER TABLE ".$course." ADD (Q_no int(2) Auto_increment primary key)";
					$res=mysqli_query($conn,$sql);
						header("Location: Teacher_menu.php");
							exit;
					}
					
						}
						else{
							//exit;
						}
				?>

<?php
mysqli_close($conn);

?>					