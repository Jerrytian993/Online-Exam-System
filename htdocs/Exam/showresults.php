<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Tak', 'Hours per Day'],
          ['Work',     11],
          ['Watch TV', 2],
        ]);

        var options = {
          title: 'Student grades'
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
</head>
<body style="background-color: lightseagreen;">
<?php 
require_once 'header.php';
require_once 'dbh.inc.php';

if (isset($_POST["submit"])) {
	$quiz_name = $_POST["quiz_name"];
}
$quiz_results = $quiz_name.'results';
    

$query = "SELECT * FROM $quiz_results";

//just creating my score table
echo '<table border="3px solid" cellspacing="2" cellpadding="2" margin-left: "1000px" > 
      <tr> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Score</font> </td> 
      </tr>';
//fetching scores from the database
if ($result = $conn->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $col1 = $row["name"];
        $col2 = $row["score"];

        //first to do a bubble sort algorithm


        echo '<tr> 
                  <td>'.$col1.'</td> 
                  <td>'.$col2.'</td> 
              </tr>';
    }
    $result->free();
} 
?>
<div id="piechart" style="width: 250px; height: 190px; margin-left: 500px; margin-top: 100px;"></div>
</body>
</html>

