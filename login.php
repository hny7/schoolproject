<?php
session_start();
 include('connection.php');
if (isset($_POST['email']) and isset($_POST['password'])){
$email = $_POST['email'];
$password = $_POST['password'];
$query = "SELECT * FROM `user` WHERE email='$email' and password='$password'";
 
$result = mysqli_query($conn,$query);
$count = mysqli_num_rows($result);
if ($count == 1){
$_SESSION['email'] = $email;
}else{
echo  "Invalid Login Credentials.";
}
}
if (isset($_SESSION['email'])){
$email = $_SESSION['email'];
echo "Hi " . $email . "";
echo "This is the Members Area";
echo "<a href='logout.php'>Logout</a>";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>hello</title>
</head>
<body>
</body>
</html>