<?php
 include 'connection.php';
 $uname = mysqli_real_escape_string($conn, $_POST['uname']);
 $pswd = mysqli_real_escape_string($conn, $_POST['pswd']);
 $pswd = md5($pswd);
 /*echo $uname;
 echo $pswd;
 echo "<br>";*/
 
 //insert data.
 $sql = "SELECT * FROM users WHERE uname ='$uname' AND pswd = '$pswd' ";
 /*echo $s;*/
 $result = mysqli_query($conn, $sql);
 //to check for result.
 if ($result) {
	/*echo "query successful";*/
 }else{
	echo "query fail";
 }
 

 $num = mysqli_num_rows($result);
 /*echo $num;*/
 
 /*echo "<br>";*/
 //check for login (if login successful, then table row will be 1)
 if ($num==1) {
	/*echo "login successful";*/
	header("location:home.php");	
 } else{
	echo "invalid credentials. Incorrect username or password." . mysqli_error($conn);
	echo "<br>";
	echo '<a href="form.php">Click here to reload</a>';
	
 }
 
?>