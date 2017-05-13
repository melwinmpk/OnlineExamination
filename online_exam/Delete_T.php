<html>
	<head>
		<title>Deleting a question</title>
	</head>
			<body background="bg/Blue_bg.jpg" text="white">
				<form action="Delete_T.php" method="POST">
				    Enter the Teachers ID which is to be deleted from the data base<br>
                    Teachers ID:<input type="text" name="Id" maxlength="20" size="20"><br>
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
							$ID=$_POST['Id'];
							//$course=$_POST['course'];
						
						$sql="DELETE FROM teacher WHERE Id='{$ID}'";
						//echo "{$sql}";
						$res=mysqli_query($conn,$sql);
						echo "$res";
					if(!$res){
						die("query failed");
						
					}
					else{
						echo "Question Deleted Sucessfully";
						
						header("Location: admin_menu.php");
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