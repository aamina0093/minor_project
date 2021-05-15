<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device=device-width, initial scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'>
	<script src="https://kit.fontawesome.com/df36c9ceaf.js" crossorigin="anonymous"></script>
	<title>Create Data</title>
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
            margin-top: 100px;
            padding-top: 5px;
            padding-bottom: 25px;  
            backdrop-filter: blur(3px);          
		}
		body{
			background-image: url(img/pcreate.jpg);
			background-repeat: no-repeat;
			background-size: cover;

		}
		h1{
			color: #FFFFF0;
		}
		p{
			color: #FFFFF0;
		}
		.fa-home{
            color: white;
        }
	</style>
	<script>
		//function for form validation
		function validateForm() {
        	var a = document.forms["myForm"]["houseno"].value;
        	var b = document.forms["myForm"]["bhk"].value;
        	var c = document.forms["myForm"]["rent"].value;
        	var d = document.forms["myForm"]["vstatus"].value;
        	if (a == "" || a == null) {
        		alert("Please fill the House-No.");
        		return false;
        	}
        	if (b == "" || b == null) {
        		alert("Please fill the BHK");
        		return false;
        	}
        	if (c == "" || c == null) {
        		alert("Please fill Rent Amount");
        		return false;
        	}
        	if (d == "" || d == null) {
        		alert("Please fill Vacancy Status");
        		return false;
        	}
    	}
	</script>
</head>
<body>
	<a href="home.php"><i class="fas fa-home"></i></a>
	<br><br><br>
	<div class="c-form">
		<h1>CREATE DATA</h1>
		<p>Please enter all the required details.</p>
		<form name="myForm" action="propertydb.php" onsubmit="return validateForm()" method="post"><br>
			<input type="text" name="houseno" placeholder="House No:..."><br>
			<input type="text" name="bhk" placeholder="B.H.K:..."><br>
			<input type="text" name="rent" placeholder="Rent(Rs):..."><br>
			<input type="text" name="vstatus" placeholder="Vacancy Status:..."><br>
			<input type="submit" value="Create">
		</form>
	</div>
	
</body>
</html>