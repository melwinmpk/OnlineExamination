<?php
	 session_start();
	 $course=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];?>
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
          <tr> <td><h1>TEACHER MENU</h1></td></tr>
		  <tr> <td><h3>WELCOME <b><?php echo$name?></b></h3></td></tr>
		  <form method="get" action="listing.php">
           <tr>
          <td><h1><input type="submit" name="submit" value="LIST QUESTION"/></h1></td>  <br />
          </tr>
		  </form>
		 
		   <form method="get" action="Insert_q.php">
          <tr>
          <td><h1><input type="submit" name="submit1" value="INSERT QUESTION"/></h1></td>    
          </tr>
		  
		  </form>
		   <form method="get" action="Delete_q.php">
          <tr>
          <td><h1><input type="submit" name="submit1" value="DELETE QUESTION"/></h1></td>    
          </tr>
		  </form>
		  
		  <form method="post" action="Teacher_menu.php">
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