<?php
 /*include 'header.php';*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tenant Details</title>
	<script src="https://kit.fontawesome.com/df36c9ceaf.js" crossorigin="anonymous"></script>
	<link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
	<style type="text/css">
		h4{
			padding-left: 550px;
			font-family: 'Arbutus Slab';
			font-size: 40px;
		}
		i{
			font-size: 50px;
			color: #4169E1;
			float: left;
			align-content: center;
		}
		ul{
			list-style-type: none;
			display: flex;
			position: relative;
		}
		li{
			display: inline;
			padding-left: 300px;
			font-size: 30px;
			font-family: 'Alatsi';
		}
		.fa-plus-square{
			font-size: 40px;
		}
		.fa-minus-square{
			font-size: 40px;
		}
		body{
			background-image: url(img/t.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
	</style>
</head>
<body>
	<a href="home.php"><i class="fas fa-home"></i></a>
	<br>
	<h4>TENANT</h4>
	<ul>
		<li><a href="tcreate.php"><i class="far fa-plus-square"></i></a>Create Data</li>
		<li><a href="tdelete.php"><i class="far fa-minus-square"></i></a>Delete Data</li>
	</ul>	
</body>
</html>

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
 	border: 2px solid black;
 	margin-left: auto; 
  	margin-right: auto;
 }
 table {
  border-collapse: collapse;
  width: 60%;
 }
 th, td {
  padding: 15px;
  font-size: 20px;
 }";
 echo "</style>";
?>

