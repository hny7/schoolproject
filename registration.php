<?php
	include('connection.php');
	$nameERR = $emailERR = $passwordERR = $user_typeERR= "";
	if (isset($_POST['register'])) {
		if (empty($_POST['user_type'])) {
			$user_typeERR = "You have to select one option";
		}
		if (empty($_POST['name'])) {
			$nameERR = "Name is required";
		}
		if (empty($_POST['email'])) {
			$emailERR = "email id is required";
		}
		if (empty($_POST['password'])) {
			$passwordERR = "password is required";
			}if (!is_numeric($_POST['password'])) {
				$passwordERR = "password must be number";
			}
		
		else{
			$name = $_POST['name'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$user_type = $_POST['user_type'];
			$sql = "INSERT INTO user (name,email,password,user_type) VALUES('$name','$email','$password','$user_type')";
			$result = mysqli_query($conn,$sql);
			if ($result) {
				echo "<p style='color:green';>"."REGISTRATION SUCCESSFUL"."</p>";
			}else{
					echo "<p style='color:red';>"."Error : Processing Your Request"."</p>";
			}
    		}
		}
?>	
<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
	<h2 style="text-align: center;margin-top: 90px;color:#0c0c0b;">Mapple High School</h2>
	<div class="main" style="width: 490px;
    						height: 315px;
    						box-shadow: 10px 10px 10px grey;
    						text-align: center;
    						margin-left: 424px;">
		<h1 style="color: green;font-family: Manjari;">REGISTRATION FORM</h1>
		<form action="" method="POST">
			<b >Register As :</b> 
			<select name="user_type">
				<option></option>
				<option>Teacher</option>
				<option>Parent</option>
				<option>Student</option>
			</select><span style="color: red"> * <?php if (isset($_POST['user_type'])) {
				echo "$user_typeERR";
			} ?> </span><br></br>
			<br>Name : <input type="text" name="name"><span style="color: red"> * <?php if (isset($_POST['name'])) {
				echo "$nameERR";
			}?> </span> <br></br>
			Email : <input type="text" name="email"><span style="color: red"> * <?php if (isset($_POST['email'])) {
				echo "$emailERR";
			} ?> </span><br></br>
			Password : <input type="password" name="password"><span style="color: red"> * <?php if (isset($_POST['password'])) {
				echo "$passwordERR";
			} ?> </span><br></br>
			<input type="submit" name="register" value="Register" style="border: 1px solid white;
			    padding-top: 8px;
			    padding-bottom: 8px;
			    padding-right: 13px;
			    padding-left: 13px;
			    border-radius: 15px;
			    margin-top: 10px;
			    color: white;
			    background-color: blue;
			    margin-right: 80px;"><br></br>
		</form>
		<p style="margin-top: -43px;margin-left: 150px;"><a style="text-decoration: none;text-decoration: none;
			    font-size: 15px;
			    border-radius: 30px;
			    padding: 6px;
			    background-color: #3f5bbfd9;
			    color: white;" href="index.php">Login Here</a></p>
	</div>
</body>
</html>