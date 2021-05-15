<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
	
	<style type="text/css">
		h1{
			font-family: 'Archivo';
			font-size: 40px;
		}	
	</style>
	
</head>
<body>
	<h1>PROPERTY DETAILS</h1>
</body>
</html> -->
<?php
 include 'connection.php';

 //program to fetch property data
 $result = mysqli_query($conn, "select * from property"); //query to select all data
 /*echo "<br>";*/
 /*if ($result) {
 	echo "yes";
 } else {
 	echo "no";
 }*/
 echo "<table border='1'>
 <tr>
 <th>HOUSE-NO</th>
 <th>BHK</th>
 <th>RENT(Rs)</th>
 <th>VACANCY STATUS</th>
 </tr>";
 //to fetch all the data
 while($row = mysqli_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['houseno'] . "</td>";
  echo "<td>" . $row['bhk'] . "</td>";
  echo "<td>" . $row['rent'] . "</td>";
  echo "<td>" . $row['vstatus'] . "</td>";
  echo "</tr>";
  }
 echo "</table>";
 echo "<style>
 table, th, td{
 	color: black;
 	text-align: center;
 	border: 5px solid black;
 	margin-left: auto; 
  	margin-right: auto;
 }
 table {
  border-collapse: collapse;
  width: 60%;
  padding-top:70px;
 }
 th, td {
  padding: 15px;
  font-size: 20px;
 }
 body{
 	background-color:#DEB887;
 }";

 echo "</style>";
?>