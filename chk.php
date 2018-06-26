<?php
session_start();
if(!isset($_POST["name"]))
{
	header('Location: index.php');
}

$con=mysqli_connect("localhost","root","","slambook");
$smt=$con->prepare("select * from user where uid=? and pass=?");
$smt->bind_param('si',$x,$y);
$x=$_POST["name"];
$y=$_POST["pass"];
$smt->execute();
$res=$smt->get_result();
if($row =$res->fetch_assoc())
{
	$_SESSION["u_name"]=$row["uid"];
	header('Location: home.php');
}
else
{
	header('Location: index.php');
}
?>