<!DOCTYPE html>
<html>
<head>
	<title>Create Data</title>
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
            backdrop-filter: blur(3px); 
            text-align: center;
            margin-left: 100px;
            margin-top: 80px;
            padding-top: 5px;
            padding-bottom: 25px;
        }
        body{
            background-image: url(img/pcreate.jpg);
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
        	var a = document.forms["myForm"]["tname"].value;
        	var b = document.forms["myForm"]["tcontact"].value;
        	var c = document.forms["myForm"]["houseno"].value;
        	var d = document.forms["myForm"]["rent"].value;
        	var e = document.forms["myForm"]["rstatus"].value;
        	if (a == "" || a == null) {
        		alert("Please fill all the Name");
        		return false;
        	}
        	if (b == "" || b == null) {
        		alert("Please fill all the Contact");
        		return false;
        	}
        	if (c == "" || c == null) {
        		alert("Please fill all the House-No");
        		return false;
        	}
        	if (d == "" || d == null) {
        		alert("Please fill all the rent");
        		return false;
        	}
        	if (e == "" || e == null) {
        		alert("Please fill all the Rent-Status");
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
    <form name="myForm" action="tenantdb.php" onsubmit="return validateForm()" method="post">
        <input type="text" name="tname" placeholder="Tenant Name..."><br>
        <input type="text" name="tcontact" placeholder="Contact:..."><br>
        <input type="text" name="houseno" placeholder="House-No:..."><br>
        <input type="text" name="rent" placeholder="Rent(Rs):..."><br>
        <input type="text" name="rstatus" placeholder="Rent-Status:..."><br>
        <input type="submit" value="Create">
    </form>
    </div>
</body>
</html>