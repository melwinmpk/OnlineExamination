<?php
	 session_start();
	 $course=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];?>
<html>
     <head>
          <title>Question Entering </title>

     </head>
	 <body background="bg/Blue_bg.jpg" text="white">
			<h3>ENTER THE QUESTION <?php echo $course	?></h3>
			<form action="Insert_q.php" method='POST'>
			  
			  Question:<input type="text" name="question" size="150" style="font-size:10pt;height:80px;width:900px;"><br>
			  Option1: <input type="text" name="op1" maxlength="20" size="20"><br>
			  Option2: <input type="text" name="op2" maxlength="20" size="20"><br>
			  Option3: <input type="text" name="op3" maxlength="20" size="20"><br>
			  Option4: <input type="text" name="op4" maxlength="20" size="20"><br>
			  Answer:<select name="ans">
               <option>Answer</option>
               <option>1</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
			   </select><br>
			  
			 
			  <input type="submit" name="submit" value="submit">
			  
</form>
</body>
	 </head>
	 
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
					$question=$_POST['question'];
					$op1=$_POST['op1'];
					$op2=$_POST['op2'];
					$op3=$_POST['op3'];
					$op4=$_POST['op4'];
					$ans=$_POST['ans'];
					//$ans1=$_POST['ans1'];
					//echo "{$ans1}";
					
					if(empty($question)||empty($op1)||empty($op2)||empty($op3)||empty($op3)||empty($op4)||empty($ans))
					{
						echo"OOPs! Your are suppose to not leave any of the constrains empty ";
					}
				else{
			
				
						$sql="INSERT INTO ".$course.
							"(Ques,Op_1,Op_2,Op_3,Op_4,Ans)".
							"VALUES('{$question}','{$op1}','{$op2}','{$op3}','{$op4}','{$ans}');";
						
						$res=mysqli_query($conn,$sql);
							//echo "$res";
						   if(!$res){
										die("query failed".mysqli_error($conn));
									}
							else{
									echo "Question inserted sucessfully";
									//wait();
									header("Location: Teacher_menu.php");
									exit;
								}
				    }	
				}	
			?>
		

