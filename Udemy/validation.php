<?php

session_start();
header('location: signin.php');
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'login');

if(!$con){
    echo "database not connected";
}else{
    echo "database connected";

}

$name = $_POST['user'];
$email = $_POST['uemail'];
$pass = $_POST['password'];
$s = "select * from signin where name = '$name'";

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
    header('location:home.php');
}
else{
	echo "Invalid Username or Password";
    header('location: login.php');
}
?>  