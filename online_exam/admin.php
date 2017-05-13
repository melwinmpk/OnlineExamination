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
<form action="admin.php" method="POST">
<tr>
 <td>ADMINS LOGIN</td></tr>
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
					
						if($usname=='admin@gmail.com' || $pswd=='admin')
						{
							header("Location: admin_menu.php");
							exit;}
						//echo "User name or password is are correct";
						//echo $name;
						//echo $course;
						 echo "Wrong Password or Username";
							exit;	
							
					}
}	


?>

