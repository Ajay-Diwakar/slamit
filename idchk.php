<?php 
echo "hi";
session_start();
if(!isset($_GET["fid"]))
{
	header('Location: rid.php');
}
$x=$_GET["fid"];
$con=mysqli_connect("localhost","root","","slambook");
$smt=$con->prepare("select * from user where uid=?");
$smt->bind_param('s',$x);
$smt->execute();
$res=$smt->get_result();
if($res->fetch_assoc())
{
	$_SESSION['fid']=$x;
	header('Location: form.php');
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Please enter the correct id</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body{
	background-image:url("pic.jpg");
	background-repeat:no-repeat;
	background-size:100% 100%;
	background-attachment:fixed;
}
</style>
</head>
<body>
<br/><br/><h1 style="text-align:center;"><a style="color:orange" href="home.php">Slam</a></h1>
<div class="row"><div class="col-sm-4"></div><div class="col-sm-4"><div class="alert alert-danger"><strong>Oops!  </strong>   Referal ID not found!</div>
<span style="font-size:20px"><a style="color:darkblue" href="home.php">Return to home</a>  - 
<a style="color:darkblue" href="rid.php">  Try again</a> </span>
</div><div class="col-sm-4"></div></div>
</body>
</html>