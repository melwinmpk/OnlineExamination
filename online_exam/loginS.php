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
<body background="bg/hero8.jpg" text="white">
<table cellspacing="15px" border="0px" align="center">
		  <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
		  <tr></tr>
          <tr></tr>

<form action="loginS.php" method="POST">
<tr>
 <td>STUDENTS LOGIN</td></tr>
 <tr>
<td>Enter the user name:<input type="text" name="uname"></td></tr>
<tr>
<td>Enter the Password:<input type="password" name="pwd"></td></tr>
<tr><td><input type="submit" name="submit" value="LOGIN"></td></tr>

</table>
</body>
</html>
<?php
if(isset($_POST['submit'])){
$uname = $_POST['uname'];
$pswd=$_POST['pwd'];

if(empty($uname) || empty($pswd))
{echo"OOPs! Your are suppose to not leave any of the constrains empty ";}
else{
	$sql="SELECT * FROM student WHERE Email='{$uname}'AND Pass='{$pswd}';"; //Q_no, Ques, Op_1, Op_2, Op_3, Op_4, Ans
					$res=mysqli_query($conn,$sql);
					if(!$res){
						//die("query failed".mysqli_error($conn));
						echo "User name or password is wrong";
						
					}
					else{$flag=0;
						while($row=mysqli_fetch_array($res)){
						
							//$course = $row['Course'];										//$question_array[$i]=$row['Ques'];
							$name = $row['Name'];
							$lastresult= $row['Lastresult'];
							$USN=$row['USN'];
							$flag=1;
							
					}	
						if($flag==0)
						{echo "Wrong Password or Username";
							exit;}
						 session_start();
							$_SESSION['myValue']=$lastresult;
							$_SESSION['myValue1']=$name;
							$_SESSION['myValue2']=$USN;
						 
							header("Location: Student_menu.php");
							exit;
					}
}	
}

?>

