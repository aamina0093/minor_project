

<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<!-- <link href='https://fonts.googleapis.com/css?family=Archivo' rel='stylesheet'> -->
	<script src="https://kit.fontawesome.com/df36c9ceaf.js" crossorigin="anonymous"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	ul{
		list-style-type: none;
		width: 200px;
		
	}
	.menu{
		display: flex;
  		position: relative;
  		width: 250px;
  		height: 635px;
  		padding: 0px 0px;
  		position: fixed;
  		font-size: 25px;
  		background: #471fdb;
  		font-family: 'Montserrat', sans-serif;
  		color: white;
  		opacity: 0.8;

	}
	ul li a{
  		color: #bdb8d7; /*color for icons*/
  		display:inline;
	}
	li{
		padding-bottom: 110px;

	}
	i{
		align-content: center;
	}
	h1{
		float: right;
		padding-right: 90px;
		text-align: center;
		font-family: 'Aclonica';
		font-size: 60px;

	}
	
  	body{
  		background-image: url(img/house4.jpg);
  		background-repeat: no-repeat;
  		background-attachment: fixed;
  		background-size: cover;
  		background-position: center ;
  		backdrop-filter: blur(2px);

  	}
  		
</style>
<body>
	<div class="wrapper">
		<div class="menu">
			<br><br>
			<ul>
				<li><a href="home.php"><i class="fas fa-home"></i></a>Home</li>
				<li><a href="property.php"><i class="fas fa-building"></i></a>Property</li>
				<li><a href="tenant.php"><i class="fas fa-user-friends"></i></a>Tenant</li>
				<li><a href="about.php"><i class="fas fa-address-card"></i></a>About Us</li>
				<li><a href="form.php"><i class="fas fa-sign-out-alt"></i></a>LogOut</li>
			</ul>
		</div>	
		<!-- <img src="img/images.jfif" class="logo"> -->
		<!-- <a href="form.php" class="logout">LOGOUT</a> -->
		<div>
			<h1>RENT MANAGEMENT SYSTEM</h1>
		</div>
		<br><br><br><br>	
	</div>	
</body>
</html>