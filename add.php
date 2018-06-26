<?php
if(!isset($_POST["mail"]))
{
	header('Location: index.php');
}
$x=$_POST["mail"];
$y=$_POST["mobile"];
$a=$_POST["uname"];
$b=$_POST["pass"];
$con=mysqli_connect("localhost","root","","slambook");

$smt=$con->prepare("select * from user where uid=?");
$smt->bind_param('s',$a);
$smt->execute();
$tmp=$smt->get_result();
if($row=$tmp->fetch_assoc())
{
	$_SESSION["mail"]=$x;
	$_SESSION["mobile"]=$y;
	$_SESSION["uname"]=$a;
	echo '<script>alert("Select another User name");</script>';
	include 'signup.php';
}
else {
	$smt=$con->prepare("insert into user(uid,pass,email,mobile) values (?,?,?,?)");
	$smt->bind_param('ssss',$a,$b,$x,$y);
	$smt->execute();
	$res=$smt->get_result();
	echo '<script>alert("Login to continue");</script>';
	include 'index.php';
}
?>