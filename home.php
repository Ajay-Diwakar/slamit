<?php
session_start();
if(!isset($_SESSION["u_name"])){
header('Location: index.php');	
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
<title>Slam-Relive your past</title>
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
<h1 style="text-align:center;color:orange">Slam</h1>
<h4 style="text-align:center;color:lightskyblue">Relive your past!</h4>
<br/>
<div class="row">
<div class="col-sm-6" style="text-align:center;">
<h3 style="text-align:center;color:magenta">Hello <?php echo $_SESSION["u_name"];?>!</h3>

<h3 style="font-family:cursive;color:snow">Share with your friends and recollect your memories</h3>
<div id="fb-root"></div>
 <div id="fb-root"></div>
  <script>(function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));</script>

  <?php $url="http://www.slamit.ml/idchk.php?fid=".$_SESSION['u_name']; ?>
<div class="fb-share-button" data-href=<?php echo $url;?> data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="">Share</a></div>


<a href="whatsapp://send?text=http://webdevelopmentscripts.com">Share on whatsapp</a>
<strong style="font-size:16px;color:gold">Your Username is your referal ID!</strong>
<br/><br/><div class="row"><div class="col-sm-6">
<h4 style="font-size:20px;font-family:serif;color:Turquoise">Know your friend's id?</h4>
<a href="form.php"><button class="btn btn-warning">Fill your memories for your friend</button></a>
</div><div class="col-sm-6"><a href="profile.php">
<img src="avatar.png" class="img-rounded" height="50px"/>
<h4 style="color:aqua">Visit Profile</h4></a></div></div>
<br/><br/>
<a href="index.php"><button class="btn btn-danger"><div class="glyphicon glyphicon-off"></div>  Logout</button></a>
</div>
<div class="col-sm-6" style="text-align:center;">
<h2 style="color:azure;">View your memories!!</h2>
<scope style="font-size:25px;text-align:center;">
<?php
$x=$_SESSION["u_name"]; 
$con=mysqli_connect("localhost","root","","slambook");
$res=$con->query("select sname,sid from slam where rname='$x'");
while($row=$res->fetch_assoc())
{
echo '<form action="view.php" method="post"> <input type="text" name="sname" value="'.$row['sname'] .'" hidden/><input type="text" name="sid" value="'.$row['sid'] .'" hidden/><scope style="color:yellow;">'.$row["sname"].'</scope><button type="submit" class="btn btn-link">View</button> </form>';
}
?>
</scope>
</div>

</div>

</body>
</html>