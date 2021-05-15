<?php
 include 'connection.php';

 //data contents
 /*echo $_POST["name"];
 echo $_POST["email"];
 echo $_POST["uname"];
 echo md5($_POST["pswd"]);
 */
 
 //create table for registration.

 /*$sql = "create table users(
 name varchar(30) not null,
 email varchar(50) not null,
 uname varchar(20) not null,
 pswd varchar(1000) not null,
 unique (uname)
 )";

 //check for table.

 if (mysqli_query($conn, $sql)) {
	echo "table created";
 } else{
	echo "table not created" . mysqli_error($conn);
 }*/

 //using real_escape 
 $name = mysqli_real_escape_string($conn, $_POST['name']);
 $email = mysqli_real_escape_string($conn, $_POST['email']);
 $uname = mysqli_real_escape_string($conn, $_POST['uname']);
 $pswd = mysqli_real_escape_string($conn, $_POST['pswd']);
 $cpswd = mysqli_real_escape_string($conn, $_POST['cpswd']);
 $pswd = md5($pswd);
 $cpswd = md5($cpswd);
 /*echo $pswd;
 echo "<br>";
 echo $cpswd;
 echo "<br>";*/
 
 //insert data into table only if the passwords match
 if ($pswd==$cpswd) {
		
 $sql = "insert into users (name, email, uname, pswd) values ('$name', '$email', '$uname', '$pswd')";

		//check for data entry.
		if (mysqli_query($conn, $sql)) {
			/*echo "data entered";*/
			header('location:home.php');
			echo "<br>";
		}  else{
			echo "data not entered. Please enter valid details." . mysqli_error($conn);
			echo "<br>";
			echo '<a href="form.php">Click here to reload</a>';
		}
 } else{
		echo "invalid credentials:the passwords do not match";
		echo "<br>";
		echo '<a href="form.php">Click here to reload</a>';
	}
?>