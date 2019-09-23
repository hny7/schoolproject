<?php
include('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link href="https://fonts.googleapis.com/css?family=Manjari&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	
	<!-- // $emailERR = $passwordERR = "";
	// if (isset($_POST['login'])) {
	// 	if (empty($_POST['email'])) {
	// 		$emailERR = "Email is required";
	// 	}
	// 	if (empty($_POST['password'])) {
	// 		$passwordERR = "Password is required";
	// 	}else{
			
	// 	}
	// } -->
	<section class="loginpage">
		<div class="container">
			<div class="logimg">
			 	<p class="logtext">Mapple High School</p>
			</div>
			<div class="logform">
				<h4 class="lo">Login</h4>
				<form action="login.php" method="POST">
					<label class="email">Email * <span style="color: red"><?php if(isset($_POST['email'])){echo($emailERR);} ?></span> </label><br><input class="email" type="email" name="email" id="email" placeholder="Email" required=""><br></br>
					<label class="password">Password * <span style="color: red"><?php if(isset($_POST['password'])){echo($passwordERR);} ?></span></label><br><input class="password" type="password" name="password" placeholder="Password" id="password" required=""><br></br>
					<button class="login" name="login"> Login</button>
				</form>
				<p class="register"><a href="registration.php"><b style="color: black">Register Here!</b></a> </p>
				<p class="back"><a href=""><b style="color: black">Back To Website</b></a> </p>
				<p class="forget"><a href=""><b style="color: black">Forget Password?</b> </a></p>	
			</div>
		</div>
		<p style="text-align: center;margin-top: 25px;">Login as</p>
		<div style="margin-top: 60px;">
		<button class="Admin" onclick="admin()">Admin</button>
		<button class="Teacher" onclick="teacher()">Teacher</button>
		<button class="Parent" onclick="parent()">Parent</button>
		<button class="Student" onclick="student()">Student</button> 
		<button class="Accountant" onclick="accountant()">Accountant</button>
		<button class="Librarian" onclick="librarian()">Librarian</button>
		</div>
	</section>
	

<script type="text/javascript" src="js/value.js"></script>
</body>
</html>