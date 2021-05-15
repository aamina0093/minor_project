<?php
 /*include 'header.php';*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Property Details</title>
	<link href='https://fonts.googleapis.com/css?family=Arbutus Slab' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/df36c9ceaf.js" crossorigin="anonymous"></script>
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
			/*background-color: #47e0c2;*/
			background-image: url(img/prop1.jpg);
		}
	</style>
</head>
<body>
	<a href="home.php"><i class="fas fa-home"></i></a>
	<br>
	<h4>PROPERTY</h4>
	<ul>
		<li><a href="pcreate.php"><i class="far fa-plus-square"></i></a>Create Data</li>
		<li><a href="pdelete.php"><i class="far fa-minus-square"></i></a>Delete Data</li>
	</ul>
	<br>
</body>
</html>

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
 echo "<table>
 <tr>
 <th>HOUSE-NO</th>
 <th>BHK</th>
 <th>RENT (RS)</th>
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
 }
 th, td {
  padding: 15px;
  font-size: 20px;
 }";
 echo "</style>";
?>
