<?php
	 session_start();
	 $lastresult=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];
	 $USN=$_SESSION['myValue2'];?>
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
					$sql="SELECT * FROM DBMS ;"; //Q_no, Ques, Op_1, Op_2, Op_3, Op_4, Ans
					$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
					else{
							$i=0;
							while($row=mysqli_fetch_array($res))
							{	
								if($i==5)
								break;
								$question_array[$i]=$row['Ques'];
								$op_1_array[$i]=$row['Op_1'];
								$op_2_array[$i]=$row['Op_2'];
								$op_3_array[$i]=$row['Op_3'];
								$op_4_array[$i]=$row['Op_4'];
								$ans_array[$i]=$row['Ans'];
								$i++;
								
							}
							
							//echo "Table Created Sucessfully";
							//$i=0;
						}
						$sql="SELECT * FROM OS ;"; //Q_no, Ques, Op_1, Op_2, Op_3, Op_4, Ans
					$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
					else{
							//$i=0;
							while($row=mysqli_fetch_array($res))
							{	
							if($i==10)
								break;
								$question_array[$i]=$row['Ques'];
								$op_1_array[$i]=$row['Op_1'];
								$op_2_array[$i]=$row['Op_2'];
								$op_3_array[$i]=$row['Op_3'];
								$op_4_array[$i]=$row['Op_4'];
								$ans_array[$i]=$row['Ans'];
								$i++;
								
							}
							
							//echo "Table Created Sucessfully";
							//$i=0;
						}
						$sql="SELECT * FROM SCIENCE ;"; //Q_no, Ques, Op_1, Op_2, Op_3, Op_4, Ans
					$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
					else{
							//$i=0;
							while($row=mysqli_fetch_array($res))
							{	
								if($i==15)
								break;
								$question_array[$i]=$row['Ques'];
								$op_1_array[$i]=$row['Op_1'];
								$op_2_array[$i]=$row['Op_2'];
								$op_3_array[$i]=$row['Op_3'];
								$op_4_array[$i]=$row['Op_4'];
								$ans_array[$i]=$row['Ans'];
								$i++;
								
							}
							
							//echo "Table Created Sucessfully";
							//$i=0;
						}
						$sql="SELECT * FROM C ;"; //Q_no, Ques, Op_1, Op_2, Op_3, Op_4, Ans
					$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
					}
					else{
							//$i=0;
							while($row=mysqli_fetch_array($res))
							{	
								if($i==20)
								break;
								$question_array[$i]=$row['Ques'];
								$op_1_array[$i]=$row['Op_1'];
								$op_2_array[$i]=$row['Op_2'];
								$op_3_array[$i]=$row['Op_3'];
								$op_4_array[$i]=$row['Op_4'];
								$ans_array[$i]=$row['Ans'];
								$i++;
								
							}
							
							//echo "Table Created Sucessfully";
							//$i=0;
						}
							 		
							$i=0;
				?>	 
				
          <form action="Questioning.php" method="POST">
		  
          <td>QuestionNo 1:<?php echo $question_array[$i]; ?><br /></td>
          
          
          
             
             <td>options</td><br />
                <td><input type="radio" name="q1" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q1" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q1" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q1" value="4" /><?php echo $op_4_array[$i]?></td><br />
             
			 <?php $i++; ?><br /><br />
			
			 
          <td>QuestionNo 2:<?php echo $question_array[$i]; ?></td>
          
          
          
             
             <td>options</td><br />
                <td><input type="radio" name="q2" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q2" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q2" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q2" value="4" /><?php echo $op_4_array[$i]?></td><br />
             
             
             
			 <?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 3:<?php echo $question_array[$i]; ?></td>
          
          
          
             
             <td>options</td><br />
                <td><input type="radio" name="q3" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q3" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q3" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q3" value="4" /><?php echo $op_4_array[$i]?><br /></td>
             
            
            
             
			 
			 
			 <?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 4:<?php echo $question_array[$i]; ?></td>
          
          
          
             
             <td>options</td><br />
                <td><input type="radio" name="q4" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q4" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q4" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q4" value="4" /><?php echo $op_4_array[$i]?><br /></td>
             

			<?php $i++; ?><br /><br />
			 
          <td>QuestionNo 5:<?php echo $question_array[$i]; ?></td>
         
            <td>options</td><br />
                <td><input type="radio" name="q5" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q5" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q5" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q5" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 6:<?php echo $question_array[$i]; ?></td>
          
            <td>options</td><br />
                <td><input type="radio" name="q6" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q6" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q6" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q6" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 7:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options</td><br />
                <td><input type="radio" name="q7" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q7" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q7" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q7" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 8:<?php echo $question_array[$i]; ?></td>
          </tr>
       
          
            
            <td>options</td><br />
                <td><input type="radio" name="q8" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q8" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q8" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q8" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 9:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options</td><br />
                <td><input type="radio" name="q9" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q9" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q9" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q9" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 10:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options</td><br />
                <td><input type="radio" name="q10" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q10" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q10" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q10" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 11:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q11" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q11" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q11" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q11" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 12:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q12" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q12" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q12" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q12" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 13:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q13" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q13" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q13" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q13" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 14:<?php echo $question_array[$i]; ?></td>
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q14" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q14" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q14" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q14" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 15:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q15" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q15" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q15" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q15" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 16:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q16" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q16" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q16" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q16" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 17:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q17" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q17" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q17" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q17" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 18:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q18" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q18" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q18" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q18" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 19:<?php echo $question_array[$i]; ?></td>
          
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q19" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q19" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q19" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q19" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			

			<?php $i++; ?><br /><br />
			 
			 
          <td>QuestionNo 20:<?php echo $question_array[$i]; ?></td>
          
          
            
            <td>options<br /></td>
                <td><input type="radio" name="q20" value="1" /><?php echo $op_1_array[$i]?><br />
					<input type="radio" name="q20" value="2" /><?php echo $op_2_array[$i]?><br />
					<input type="radio" name="q20" value="3" /><?php echo $op_3_array[$i]?><br />
					<input type="radio" name="q20" value="4" /><?php echo $op_4_array[$i]?><br /></td>
            
			
			
			
				
             <td><input type="submit" name="submit" value="submit"/></td>
             
	  </form>

<?php
if(isset($_POST['submit']))
{$i=0;
		$marks1=0;
		$marks2=0;
		$marks3=0;
		$marks4=0;
		
	$q1[0]=$_POST['q1'];
	$q1[1]=$_POST['q2'];
	$q1[2]=$_POST['q3'];
	$q1[3]=$_POST['q4'];
	$q1[4]=$_POST['q5'];
	$q2[0]=$_POST['q6'];
	$q2[1]=$_POST['q7'];
	$q2[2]=$_POST['q8'];
	$q2[3]=$_POST['q9'];
	$q2[4]=$_POST['q10'];
	$q3[0]=$_POST['q11'];
	$q3[1]=$_POST['q12'];
	$q3[2]=$_POST['q13'];
	$q3[3]=$_POST['q14'];
	$q3[4]=$_POST['q15'];
	$q4[0]=$_POST['q16'];
	$q4[1]=$_POST['q17'];
	$q4[2]=$_POST['q18'];
	$q4[3]=$_POST['q19'];
	$q4[4]=$_POST['q20'];
	/*if(empty($q1)||empty($q2)||empty($q3)||empty($q4)||empty($q5))
	{
		echo"OOPs! Your are suppose to Attempt every question ";
		exit;
	}*/
	for($i=0;$i<5;$i++)
	{
		if($q1[$i]==$ans_array[$i])
		{
			$marks1=$marks1+1;
		}
		
	}
	
		for($i=0,$j=5;$i<5;$i++,$j++)
	{
		if($q2[$i]==$ans_array[$j])
		{
			$marks2=$marks2+1;
		}
		
	}
		for($i=0,$j=10;$i<5;$i++,$j++)
	{
		if($q3[$i]==$ans_array[$j])
		{
			$marks3=$marks3+1;
		}
		
	}
	
			for($i=0,$j=15;$i<5;$i++,$j++)
	{
		if($q4[$i]==$ans_array[$j])
		{
			$marks4=$marks4+1;
		}
		
	}
	
	
	$marks=$marks1+$marks2+$marks3+$marks4;
	$lastresult=$marks;
	echo"Your marks is ".$marks."out of 20";
	$_SESSION['myValue']=$lastresult;
$sql="UPDATE student SET Lastresult=$marks WHERE USN=$USN ;";
$res=mysqli_query($conn,$sql);
					//echo "$res";
					if(!$res){
						die("query failed".mysqli_error($conn));
						exit;
					}
					
	
		$_SESSION['myValue3']=$marks1/5;
		$_SESSION['myValue4']=$marks2/5;
		$_SESSION['myValue5']=$marks3/5;
		$_SESSION['myValue6']=$marks4/5;
		$_SESSION['myValue7']=$marks;
		
		//header("Location:PieChartTest.php");
		//exit;
				
	
	
}
?>
<?php
mysqli_close($conn);
?>	
	<form method="post" action="PieChartTest.php">
           <tr>
          <td><h1><input type="submit" name="submit" value="PI CHART"/></h1></td>  <br />
          </tr>
		  </form>
			</body>	
</html>			