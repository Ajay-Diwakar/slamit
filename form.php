<?php
session_start();
if((!isset($_SESSION["fid"])) || ($_SESSION["fid"]==""))
{
	header('Location: rid.php');
}
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

<title>Write slam for your friend</title>
<style>
body{
	background-image:url("back.jpg");
	background-repeat:no-repeat;
	background-size:100% 100%;
	
}
</style>
</head>
<body>
<div class="container-fluid">
<a href="home.php"><h1 Style="text-align:center;color:darkorange">Slam it!</h1></a>
<h4 style="text-align:center;color:khaki">Open up and feel free to fill this up</h4><br/>
<form action="ins.php" method="post">
<div class="row">
<div class="col-sm-1"></div>
<div class="col-sm-4">
<h2 style="color:linen;text-align:center">About You</h2>
<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<input type="text" name="sname" placeholder="Your name" class="form-control" required/></div>
<br/>
<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<input type="text" name="niname" placeholder="Your Nickname" class="form-control" required/></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-gift"></i></scope>
<input type="date" name="bday" placeholder="Your Birthday" class="form-control" required/></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="meet" placeholder="If you want to meet anyone, Who would it be?" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="wishes" placeholder="If you had 3 wishes, what would they be" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="sports" placeholder="Favorite sports and teams" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="music" placeholder="Favorite songs and music" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="nxt" placeholder="Where will you want to be in 20 years" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="siritate" placeholder="What things iritate you the most" class="form-control" required></textarea></div>

</div>
<div class="col-sm-2"></div>
<div class="col-sm-4">


<h2 style="color:linen;text-align:center">About Me</h2>
<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<input type="text" name="rname" placeholder="Your name" value="<?php echo $_SESSION['fid'];?>" class="form-control" disabled/></div>
<br/>


<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="things" placeholder="Things that gets into your mind when you hear my name" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="weak" placeholder="My weakness" class="form-control" required></textarea></div>
<br/>
<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="strong" placeholder="My strength" class="form-control" required></textarea></div>
<br/>
<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="psay" placeholder="What people say about me" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="fimp" placeholder="Your first impression on me" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="pimp" placeholder="Your present impression on me" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="worst" placeholder="Worst habit of me" class="form-control" required></textarea></div>
<br/>

<div class="input-group">
<scope class="input-group-addon">
<i class="glyphicon glyphicon-user"></i></scope>
<textarea name="advice" placeholder="Advices to me" class="form-control" required></textarea></div>

</div><div class="col-sm-1"></div>
</div><br/>
<div class="row"><div class="col-sm-5"></div>
<div class="col-sm-2"><button type="submit" class="form-control btn btn-warning">Finish</button></div>
<div class="col-sm-5"></div>
</form></div><br/><br/></div>
</body>
</html>
