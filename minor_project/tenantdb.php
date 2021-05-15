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
	<h1>TENANT DETAILS</h1>
	<br><br>	
</body>
</html>
<?php
 include 'connection.php';


 //create table 
 /*$sql = "create table tenant(
 name varchar(30) not null,
 contact varchar(50) not null,
 houseno varchar(30) not null, 
 rent varchar(30) not null, 
 rent_status varchar(30) not null,
 unique (houseno)
 )";

 //check for table
 if (mysqli_query($conn, $sql)) {
 	echo "table created";
 } else{
 	echo "table not created" . mysqli_error($conn);
 }*/

 //data contents
 /*echo $_POST["tname"];
 echo $_POST["tcontact"];
 echo $_POST["houseno"];
 echo $_POST["rent"];
 echo $_POST["rstatus"];
 echo "<br>";
 */
 
 //using real escape to enter string
 $tname = mysqli_real_escape_string($conn, $_POST['tname']);
 $tcontact = mysqli_real_escape_string($conn, $_POST['tcontact']);
 $houseno = mysqli_real_escape_string($conn, $_POST['houseno']);
 $rent = mysqli_real_escape_string($conn, $_POST['rent']);
 $rstatus = mysqli_real_escape_string($conn, $_POST['rstatus']);

 
 //enter data in the database
 $sql = "insert into tenant(name, contact, houseno, rent, rent_status) 
 		values ('$tname', '$tcontact', '$houseno', '$rent', '$rstatus')";

 //check if data entered
 if (mysqli_query($conn, $sql)) {
 	echo "Data Entered SUCCESSFULLY!!"; 	
 } else{
 	echo "Data NOT Entered. " . mysqli_error($conn);
 }
 
 
 //show data from database in the website
 $result = mysqli_query($conn, "select * from tenant");		//to select data from databse
/* $resultCheck = mysqli_num_rows($result);	*///to check the number of rows
 /*echo $resultCheck;*/

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