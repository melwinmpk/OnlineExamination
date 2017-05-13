<?php
	
	 
	 session_start();
	 $lastresult=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];
	 $USN=$_SESSION['myValue2'];
	 $markDBMS=$_SESSION['myValue3'];
	 $markOS=$_SESSION['myValue4'];
	 $marksSC=$_SESSION['myValue5'];
	 $marksC=$_SESSION['myValue6'];
	 $marksT=$_SESSION['myValue7'];
	 
	 
	 

	include "libchart/libchart/classes/libchart.php";

	$chart = new PieChart();

	$dataSet = new XYDataSet();
	$dataSet->addPoint(new Point("DBMS ",$markDBMS ));
	$dataSet->addPoint(new Point("OS ", $markOS));
	$dataSet->addPoint(new Point("SCIENCE",$marksSC));
	$dataSet->addPoint(new Point("C ", $marksC));

	$chart->setDataSet($dataSet);

	$chart->setTitle("User agents for www.example.com");
	$chart->render("generated/demo3.png");
?>
<html>
<head>
	<title>Libchart pie chart demonstration</title>
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
</head>
<body>
	<img alt="Pie chart"  src="generated/demo3.png" style="border: 1px solid gray;"/>
	 <form method="post" action="Student_menu.php">
           <table>
		  <tr>
          <td><h1><input type="submit" name="submit1" value="TO STUDENT MENU"/></h1></td>  <br />
          </tr>
		  </table>
		  </form>

</body>
</html>
