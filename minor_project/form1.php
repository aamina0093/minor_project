<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
	<style type="text/css">
		.c-form{
            border-radius: 20px;
            width: 400px;
            box-shadow: 5px 5px 10px 5px;
            /*background-color:  black;*/
            text-align: center;
            margin-left: 100px;
            margin-top: 10px;
            padding-top: 5px;
            padding-bottom: 25px;  
            backdrop-filter: blur(3px);          
        }
		input{
			width: 200px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
		}
		input[type=submit]{
        	text-align: center;
        	cursor: pointer;
        	width: 220px;
            background-color: blue;
            color: white;
            font-size: 15px;

        }
        body{
        	background-image: url(img/back4.jpg);
            background-size: cover;
            background-repeat: no-repeat;
        }
        h2{
        	
        	font-family: 'Alatsi';
	        font-size: 30px;
	        text-align: center;    
        }
        .form-box{
        	padding-left: 10px;
        }
        h1{
        	font-family: 'Aclonica';
            font-size: 40px;
            text-align: center;
        }
	</style>
	<script type="text/javascript">
		//function for form validation
		function validateForm() {
        	var a = document.forms["myForm"]["name"].value;
        	var b = document.forms["myForm"]["email"].value;
        	var c = document.forms["myForm"]["uname"].value;
        	var d = document.forms["myForm"]["pswd"].value;
        	if (a == "" || a == null) {
        		alert("Please fill Name");
        		return false;
        	}
        	if (b == "" || b == null) {
        		alert("Please fill Email");
        		return false;
        	}
        	if (c == "" || c == null) {
        		alert("Please fill Username");
        		return false;
        	}
        	if (d == "" || d == null) {
        		alert("Please fill Password");
        		return false;
        	}
    	}
	</script>
</head>
<body>
	<h1 class="header-title">RENT MANAGEMENT SYSTEM</h1>
	<br><br><br>
	<div class="c-form">
 		<h2>Create Account</h2>
 		<form name="myForm" action="database1.php" onsubmit="return validateForm()" method="post" required>
 			<input type="text" name="name" placeholder="Name..."> <br>
 			<input type="text" name="email" placeholder="Email..." class="log-form"> <br>
 			<input type="text" name="uname" placeholder="Username..." class="log-form"> <br>
 			<input type="Password" name="pswd" placeholder="Password..." class="log-form"> <br>
 			<input type="Password" name="cpswd" placeholder="Confirm Password..." class="log-form"> <br>
 			<input type="submit" value="Register">
 		</form>
 	</div>
	<br>

</body>
</html>