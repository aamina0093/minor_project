<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "taskdb";

 //create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 //check for connection
 if ($conn->connect_error) {
 	die("not connected" . mysqli_connect_error());
  }else{
  	/*echo "connection successful";*/
  }

 /*//create database
 $sql = "create database taskdb";
 //check for database
 if (mysqli_query($conn, $sql)) {
 	echo "database created";
 }else{
 	echo "database not created" . mysqli_error($conn);
 }*/
?>