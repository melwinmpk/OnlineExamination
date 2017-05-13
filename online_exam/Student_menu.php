<?php
	 session_start();
	 $lastresult=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];
	 $USN=$_SESSION['myValue2'];?>

<html>
     <head>
          <title>Signup Page </title>

     </head>
     <body background="bg/VKTPd2M - Imgur.jpg" text="white">
	  
          <table cellspacing="15px" border=0px" align="center">
          
         
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          <tr></tr>
          
          <tr> <td><h1>Student Menu</h1></td></tr>
		  <tr> <td><h3>WELCOME <?php echo $name?> YOUR LATEST TEST RESULT <?php echo $lastresult?> </h3></td></tr>
		  <form method="get" action="Questioning.php">
           <tr>
          <td><h1><input type="submit" name="submit" value="TEST"/></h1></td>  <br />
          </tr>
		  </form>
		 
		  <form method="get" action="V_course.php">
          <tr>
          <td><h1><input type="submit" name="submit1" value="VIEW COURCES"/></h1></td>    
          </tr>
		  </form>
		  
		  <!-- <form method="get" action="Teacher_signup.php">
          <tr>
          <td><h1><input type="submit" name="submit2" value="ADMIN'S   LOGIN"/></h1></td>    
          </tr>-->
		  
		  </form>
		  <form method="post" action="Student_menu.php">
           <tr>
          <td><h1><input type="submit" name="submit" value="LOG OUT"/></h1></td>  <br />
          </tr>
		  </form>
      </table>
     <body>
</html>

<?php
if(isset($_POST['submit'])){
	
	//session_start();
	 //$course=$_SESSION['myValue'];
	 //$name=$_SESSION['myValue1'];
	 //echo $course;
	 session_destroy();
	 
	 header("Location: MAIN PAGE.php");
							exit;
}
?>