<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device=device-width, initial scale=1.0">
	<!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
    <link href='https://fonts.googleapis.com/css?family=Alatsi' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<title>RENT MANAGEMENT SYSTEM</title>
	<style>
        /*heading*/
        h1{
            font-family: 'Aclonica';
            font-size: 40px;
            text-align: center;
        }
        #wrapper{
            float: right;
            text-align: center;
            padding-top: 40px;
            padding-right: 300px;

        }
        /*login box*/
        .login{
            border-radius: 20px;
            width: 400px;
            box-shadow: 5px 5px 10px 5px;
            background-color: white;

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
            font-size: 20px;
        }
        .login-img{
            padding-top: 10px;
            height: 80px;
            border-radius: 50%;
        }
        .page-img{
            height: 300px;
            float: left;
            padding-top: 60px;
            padding-left: 100px;

        }
        h2{
            font-family: 'Alatsi';
            font-size: 35px;
            color: #F0FFFF;
        }
        body{
            background-color: #cc99ff;     
        }
        h3{
            color: #F0FFFF;
            font-size: 30px;
            

        }
        a{
            text-decoration: none;
            color: #F0FFFF;
            font-size: 30px;
        }
        a:hover{
           color: yellow;
        }
        h2{
            color: black;
        }
        h3{
            color: black;
        }
        a{
            color: black;
        }
	</style>
	<script>
		//function for form validation
		function validateForm() {
        	var a = document.forms["myForm"]["uname"].value;
        	var b = document.forms["myForm"]["pswd"].value;
        	if (a == "" || a == null) {
        		alert("Please fill Username");
        		return false;
        	}
            if (b == "" || b == null) {
                alert("Please fill Password");
                return false;
            }
    	}
	</script>
</head>
<body>	
	<h1>RENT MANAGEMENT SYSTEM</h1>
    <div class="body-page">
        <img src="img/house1.png" class="page-img">
        <!--  main div wrapper which consists other two divs -->
        <div id="wrapper">
            <div class="login">
                <img src="img/login1.jpg" class="login-img">
                <section><h2>Login</h2></section>
                <form name="myForm" action="database2.php" onsubmit="return validateForm()" method="post" required>
                <input type="text" name="uname" placeholder="Username..." class="log-form"> <br>
                <input type="Password" name="pswd" placeholder="Password..." class="log-form"> <br>
                <input type="submit" value="Login">
                </form>
                <br> 
            </div>
        <div class="register-link">
        <h3>If new user, <a href="form1.php">Register</a></h3>
    </div>
</body>
</html>