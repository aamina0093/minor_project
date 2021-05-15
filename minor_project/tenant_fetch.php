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
	<h1>TENANT DETAILS</h1>
</body>
</html> -->
<?php
 //connection
 include 'connection.php';
 //query to fetch the tenant data
 $result = mysqli_query($conn, "select * from tenant");
 //table for database
 /*echo "TENANT DETAILS";*/
 echo "<table border='1'>
 <tr>
 <th>NAME</th>
 <th>CONTACT</th>
 <th>HOUSE-NO</th>
 <th>RENT(Rs)</th>
 <th>RENT-STATUS</th>
 </tr>";

 //to fetch all the data
 while($row = mysqli_fetch_array($result))
 {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['contact'] . "</td>";
  echo "<td>" . $row['houseno'] . "</td>";
  echo "<td>" . $row['rent'] . "</td>";
  echo "<td>" . $row['rent_status'] . "</td>";
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
 	background-color:#FF7F50;
 }";

 echo "</style>";
?>