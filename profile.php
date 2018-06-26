<?php
session_start();
if(!isset($_SESSION["u_name"]))
{
	header('Location: index.php');
}
$x=$_SESSION["u_name"];
$con=mysqli_connect("localhost","root","","slambook");
$res=$con->query("select * from user where uid='$x'");
$row=$res->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
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
<title>Profile - Slambook</title>
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
<a href="home.php"><h1 style="text-align:center;color:orange">Slam</h1></a>
<h3 style="text-align:center;color:cyan">Relive your memories!</h3>
<br/><br/><br/><div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<div class="panel panel-default">
<h3 style="text-align:center;color:magenta">Profile</h3>
<div class="row"><div class="col-sm-3"></div><div class="col-sm-6">
<form method="post">
<div class="input-group"><scope class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></scope><input type="email" name="mail" class="form-control" value="<?php echo $row["email"];?>"/></div>
<br/><div class="input-group"><scope class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></scope><input type="text" name="mobile"  class="form-control" value="<?php echo $row["mobile"];?>"/></div>
<br/><div class="input-group"><scope class="input-group-addon"><i class="glyphicon glyphicon-user"></i></scope><input type="text" name="uname" class="form-control" value="<?php echo $row["uid"];?>"/></div>
<br/><a href="edit.php"><div class="glyphicon glyphicon-pencil">   Edit</div>
</form><br/>
<br/></div><div class="col-sm-3"></div></div>
</div>
</div>
<div class="col-sm-3"></div>
</div>
</body>
</html>