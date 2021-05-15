<!DOCTYPE html>
<html>
<head>
	<title>Delete Data</title>
	<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/df36c9ceaf.js" crossorigin="anonymous"></script>
	<style type="text/css">
		input{
			width: 200px;
            padding: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
		}	
		h1{
			font-family: 'Archivo';
			font-size: 40px;
			color: white;
		}	
		p{
			color: white;
		}
		input[type=submit]{
        	text-align: center;
        	cursor: pointer;
        	width: 230px;
        	background-color: blue;
        	color: white;
        	font-size: 16px;
        }
        i{
			font-size: 50px;
			color: #4169E1;
			float: left;
			align-content: center;
		}
		.fa-plus-square{
			font-size: 40px;
		}
		.fa-minus-square{
			font-size: 40px;
		}
		.c-form{
			border-radius: 20px;
            width: 400px;
            box-shadow: 5px 5px 10px 5px;
            text-align: center;
            margin-left: 100px;
            margin-top: 110px;
            padding-top: 5px;
            padding-bottom: 25px;
            backdrop-filter: blur(6px); 
		}
		body{
			background-image: url(img/back5.jpg);
			background-repeat: no-repeat;
			background-size: cover;
		}
		.fa-home{
			color: white;
		}
	</style>
	<script>
		//function for form validation
		function validateForm() {
        	var x = document.forms["myForm"]["houseno"].value;
        	if (x == "" || x == null) {
        		alert("Please fill House-No.");
        		return false;
        	}
    	}
	</script>
</head>
<body>
	<a href="home.php"><i class="fas fa-home"></i></a>
	<br><br><br>
	<div class="c-form">
		<h1>DELETE DATA</h1>
		<p>Please enter the required data</p>
		<form name="myForm" action="pdeletedb.php" onsubmit="return validateForm()" method="post">
			<input type="text" name="houseno" placeholder="Enter House-No:..."><br>
			<input type="submit" value="Delete">
		</form>
	</div>
</body>
</html>