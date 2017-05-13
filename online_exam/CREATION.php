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
				
				$sql="CREATE TABLE Student";
				$sql.="( USN int(5) Primary key ,";
				$sql.="Name varchar(20) Not Null,";
				$sql.="Email varchar(50) Not Null,";
				$sql.="Gender varchar(1) Not Null,";
				$sql.="Dob varchar(20) Not Null,";
				$sql.="Pass varchar(50) Not Null,";
				$sql.="Lastresult int(4) );";
				$res=mysqli_query($conn,$sql);
				//	echo "$res";
					if(!$res){
						//die("query failed");
					}
					else{
						echo "Table Created Sucessfully";
					}
			?>
<?php
				
				$sql="CREATE TABLE DBMS";
				$sql.="( Q_no int(2) Primary key auto_increment,";
				$sql.="Ques varchar(320) Not Null,";
				$sql.="Op_1 varchar(20) Not Null,";
				$sql.="Op_2 varchar(20) Not Null,";
				$sql.="Op_3 varchar(20) Not Null,";
				$sql.="Op_4 varchar(20) Not Null,";
				$sql.="Ans int(11) Not Null);";
				$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						//die("query failed");
					}
					else{
						echo "Table Created Sucessfully";
					}
			?>
<?php
				
				$sql="CREATE TABLE OS";
				$sql.="( Q_no int(2) Primary key auto_increment,";
				$sql.="Ques varchar(320) Not Null,";
				$sql.="Op_1 varchar(20) Not Null,";
				$sql.="Op_2 varchar(20) Not Null,";
				$sql.="Op_3 varchar(20) Not Null,";
				$sql.="Op_4 varchar(20) Not Null,";
				$sql.="Ans int(11) Not Null);";
				$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						//die("query failed");
					}
					else{
						echo "Table Created Sucessfully";
					}
			?>
<?php
				
				$sql="CREATE TABLE SCIENCE";
				$sql.="( Q_no int(2) Primary key auto_increment,";
				$sql.="Ques varchar(320) Not Null,";
				$sql.="Op_1 varchar(20) Not Null,";
				$sql.="Op_2 varchar(20) Not Null,";
				$sql.="Op_3 varchar(20) Not Null,";
				$sql.="Op_4 varchar(20) Not Null,";
				$sql.="Ans int(11) Not Null);";
				$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						//die("query failed");
					}
					else{
						echo "Table Created Sucessfully";
					}
			?>
<?php
				
				$sql="CREATE TABLE C";
				$sql.="( Q_no int(2) Primary key auto_increment,";
				$sql.="Ques varchar(320) Not Null,";
				$sql.="Op_1 varchar(20) Not Null,";
				$sql.="Op_2 varchar(20) Not Null,";
				$sql.="Op_3 varchar(20) Not Null,";
				$sql.="Op_4 varchar(20) Not Null,";
				$sql.="Ans int(11) Not Null);";
				$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						//die("query failed");
					}
					else{
						echo "Table Created Sucessfully";
					}
			?>			
<?php
				
				$sql="CREATE TABLE Teacher";
				$sql.="( Id int(5) Primary key ,";
				$sql.="Name varchar(20) Not Null,";
				$sql.="Email varchar(50) Not Null,";
				$sql.="Gender varchar(1) Not Null,";
				$sql.="Dob varchar(20) Not Null,";
				$sql.="Pass varchar(50) Not Null,";
				$sql.="Course varchar(20) Not Null );";
				
				$res=mysqli_query($conn,$sql);
					echo "$res";
					if(!$res){
					//	die("query failed");
					}
					else{
						echo "Table Created Sucessfully";
					}
			?>			
	<?php
mysqli_close($conn);
header("Location: MAIN PAGE.php");
exit;
?>		