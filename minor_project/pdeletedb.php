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
 //connection
 include 'connection.php';

 //data contents
 /*echo $_POST["houseno"];*/

 //to enter data using real escape
 $houseno = mysqli_real_escape_string($conn, $_POST['houseno']);

 //query to delete data
 $sql = "DELETE FROM `property` WHERE houseno = $houseno";

 //check for query
 if (mysqli_query($conn, $sql)) {
  	echo "Data DELETED!!";
  	echo "<br>";
  	include 'property_fetch.php';
  } else {
  	echo "Data NOT Deleted!! " . mysqli_error($conn);
  }


?>