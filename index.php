<?php
session_start();
session_unset();
session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Bangers|Frijole|Handlee|Indie+Flower|Love+Ya+Like+A+Sister|Pacifico|Permanent+Marker|Playball|Satisfy|Shrikhand" rel="stylesheet">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Welcome to my Wall!</title>
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.11&appId=147645962554902';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="container-fluid">
<div class="row">
<div class="col-sm-7">
<h1 style="text-align:center;font-family:Shrikhand"><a href="home.php" style="color:orange">Slam-it!</a></h1>
<h3 style="text-align:center;font-family:Indie Flower; color:cyan">Relive your memories!</h3>
<br/><h3 style="text-align:center;color:palegreen;font-family:Pacifico">Relive the memories that you had experienced in your past</h3></br/>

<h3 style="text-align:center;color:gold;font-family:Love Ya Like A Sister">Worried of paper slambook?</h3><br/>
<h4 style="text-align:center;color:ivory;font-family:Shrikhand">Create free account and share your userid as referal id to your friend</h4>
</div>
<div class="col-sm-5">
<div class="panel panel-default"></br>
<div class="row"><div class="col-sm-2"></div><div class="col-sm-8">
<h3 style="color:magenta;text-align:center">Login</h3><form class="form-default" action="chk.php" method="post" align="center">
<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span><input type="text" class="form-control" name="name" placeholder="UserName" required></div></br>
<div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span><input type="password" class="form-control" name="pass" placeholder="Password" required></div><br/>
<div class="row"><div class="col-sm-4"></div><div class="col-sm-4"><div class="input-group"><button type="submit" class="btn btn-info form-control">Login</button></div></div><div class="col-sm-4"></div></div>
<br/><a href="signup.php">New here? Signup to continue!</a><br/>

 
</form></div></div><br/>
</div>
</div><br/></div><br/><br/><br/>
<div class="row"><div class="col-sm-4"></div><div class="col-sm-4">
<h2 style="color:yellow;font-family:Love Ya Like A Sister">Know your friend's referal ID?</h2>

<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-6">
<a href="form.php">
<button class="btn btn-warning">
<div class="glyphicon glyphicon-pencil"></div> <scope style="font-family:Pacifico"> Write memories for your friend</scope></button></a></div><div class="col-sm-4"></div>
</div>
<h2 style="color:cyan;font-family:Love Ya Like A Sister">No account needed to fill your friend's slam</h2>
</div><div class="col-sm-4"></div></div>
</div></div>
<br/></body>
</html>