<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/df36c9ceaf.js" crossorigin="anonymous"></script>
	<style type="text/css">
		h1{
			font-family: 'Archivo';
			font-size: 40px;
		}	
		.fa-home{
			font-size: 40px;
		}
	</style>
	
</head>
<body>
	<a href="home.php"><i class="fas fa-home"></i></a>
	<h1>PROPERTY DETAILS</h1>
	<br><br>	
</body>
</html>
<?php
 include 'connection.php';

 //create table 
 /*$sql = "create table property(	
 houseno varchar(30) not null,
 bhk varchar(30) not null,
 rent varchar(30) not null,
 vstatus varchar(30) not null,
 unique (houseno)
 )";
 
 //check for table
 if (mysqli_query($conn, $sql)) {
 	echo "table created";
 } else{
 	echo "table not created" . mysqli_error($conn);
 }*/


 //data contents
 /*echo $_POST["houseno"];
 echo $_POST["bhk"];
 echo $_POST["rent"];
 echo $_POST["vstatus"];
 echo "<br>";*/
 
 
 //using real escape to enter string
 $houseno = mysqli_real_escape_string($conn, $_POST['houseno']);
 $bhk = mysqli_real_escape_string($conn, $_POST['bhk']);
 $rent = mysqli_real_escape_string($conn, $_POST['rent']);
 $vstatus = mysqli_real_escape_string($conn, $_POST['vstatus']);

 //insert data in table
 $sql = "insert into property(houseno, bhk, rent, vstatus) 
 		values ('$houseno', '$bhk', '$rent', '$vstatus')";
 
 //check if data entered
 if (mysqli_query($conn, $sql)) {
 	echo "Data Entered SUCCESSFULLY!!"; 	
 } else{
 	echo "Data NOT Entered. " . mysqli_error($conn);
 }

 //create table on website
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