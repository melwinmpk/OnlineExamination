<?php
	 session_start();
	 $lastresult=$_SESSION['myValue'];
	 $name=$_SESSION['myValue1'];
	 $USN=$_SESSION['myValue2'];
	 $marksDBMS=$_SESSION['myValue3'];
	 $marksOS=$_SESSION['myValue4'];
	 $marksSC=$_SESSION['myValue5'];
	 $marksC=$_SESSION['myValue6'];
	 $marksT=$_SESSION['myValue7'];
	 
	 
	 ?>
<html>
  <head>
  <form method="post" action="Student_menu.php">
           <table>
		  
          <td><h1><input type="submit" name="submit" value="PI CHART"/></h1></td>  <br />
          </tr>
		  </table>
		  </form>
		  
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['COURSE',      'MARKS'],
          ['DBMS',            '<?php echo $marksDBMS?>'],
          ['OS',              ' <?php echo $marksOS?>'],
          ['SCIENCE',         '<?php echo $marksSC?>'],
          ['C',               ' <?php echo $marksC?>'],
          //['CNS',               7],
          //['FLAT',             30]
        ]);

        var options = {
          title: 'STUDENT MARKS PIE CHART',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }
    </script>
	
  </head>
  <body>
    <div id="piechart_3d" style="width: 1000px; height: 500px;"></div>
  </body>
</html>