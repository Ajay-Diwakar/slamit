<?php 
session_start();
if(!isset($_POST["mail"]))
{
	header('Location: edit.php');
}
$x=$_SESSION["u_name"];
$con=mysqli_connect("localhost","root","","slambook");
$a=$_POST["mail"];
$b=$_POST["mobile"];
$smt=$con->prepare("update user set email=?, mobile=? where uid=?");
$smt->bind_param('sss',$a,$b,$x);
$smt->execute();
header('Location: profile.php');
?>