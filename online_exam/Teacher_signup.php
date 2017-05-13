<html>
     <head>
          <title>Signup Page </title>

     </head>
     <body background="bg/website_designing.jpg" text="white">
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
          <tr></tr>
          <form action="Teacher_signup.php" method="POST">
		  <tr>
          <td>Teacher's ID:</td>
          <td><input type ="text" name="id" /></td>
          </tr>
          <tr>
          <td>First name</td>
          <td><input type ="text" name="first_name" /></td>
          </tr>
          <tr>
          <td>Last name</td>
          <td><input type ="text" name="last_name" /></td>
          </tr>
          <tr>
          <td>Email</td>
          <td><input type ="text" name="email" /></td>
          </tr>
		  <tr>
          <td>Course</td>
          <td><select name="course">
               <option>course</option>
               <option>DBMS</option>
               <option>OS</option>
               <option>SCIENCE</option>
               <option>C</option>
             </select></td>
          </tr>
          <tr>
          <td>Date of Birth</td>
          <td><select name="year">
               <option>Year</option>
               <option>1995</option>
               <option>1996</option>
               <option>1997</option>
               <option>1998</option>
               <option>1999</option>
             </select> 
             <select name="month">
               <option>month</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
             </select>
             <select name="day">
               <option>day</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
               <option>6</option>
               <option>7</option>
               <option>8</option>
               <option>9</option>
               <option>10</option>
               <option>11</option>
               <option>12</option>
               <option>13</option>
               <option>14</option>
               <option>15</option>
               <option>16</option>
               <option>17</option>
               <option>18</option>
               <option>19</option>
               <option>20</option>
               <option>21</option>
               <option>22</option>
               <option>23</option>
               <option>24</option>
               <option>25</option>
               <option>26</option>
               <option>27</option>
               <option>28</option>
               <option>29</option>
               <option>30</option>
               <option>31</option>
             </select></td>
             </tr>
             <tr>
             <td>Gender</td>
                <td><input type="radio" name="gender" value="M" />Male
                    <input type="radio" name="gender" value="F" />Female</td>
             </tr>
             <tr>
             <td>Password</td>
             <td><input type="password" name="pass" /></td>
             </tr>
             <td>Retype Password</td>
             <td><input type="password" name="repass" /></td>
             </tr>
             <td><input type="submit" name="submit" value="submit"/></td>
             </tr>
      </table>
     <body>
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
<html>
	<head>
		<title>Sign up Page</title>
	</head>
			<body>
				<?php
				     if(isset($_POST['submit'])){
						 $Id=$_POST['id'];
						 $first=$_POST['first_name'];
						 $last=$_POST['last_name'];
						 $email=$_POST['email'];
						 $year=$_POST['year'];
						 $month=$_POST['month'];
						 $gender=$_POST['gender'];
						 $pass=$_POST['pass'];
						 $day=$_POST['day'];
						 $dob=$year.'/'.$month.'/'.$day;
						 $name=$first.' '.$last;
						 $repass=$_POST['repass'];
						 $course=$_POST['course'];
						 
						 if(empty($Id)||empty($first)||empty($email)||empty($day)||empty($month)||empty($year)||empty($gender)||empty($pass)||empty($repass)||empty($course))
						 { echo"OOPs! Your are suppose to not leave any of the constrains empty ";}
					     elseif($pass!=$repass)
						 { echo "Pass word does not match";}
						 else
						 {
							 $sql="INSERT INTO Teacher".
									"(Id,Name,Email,Gender,Dob,Pass,Course)".
									"VALUES($Id,'{$name}','{$email}','{$gender}','{$dob}','{$pass}','{$course}');";
								
				
							$res=mysqli_query($conn,$sql);
								//echo "$res";
								if(!$res){
									die("query failed".mysqli_error($conn));
								}
								else{
									echo "Data Inserted Sucessfully";
								}
									 }
					 } 
				?>	 
			</body>	
</html>	

<?php
mysqli_close($conn);
?>			

           