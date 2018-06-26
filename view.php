<?php
session_start();
if(!isset($_POST["sname"]))
{
	header('Location: home.php');
}
$x=$_POST["sname"];
$y=$_POST["sid"];
$con=mysqli_connect("localhost","id2865343_visanth","visanth","id2865343_slambook");
$smt=$con->prepare("select * from slam where sname=? and sid=?");
$smt->bind_param('ss',$x,$y);
$smt->execute();
$res=$smt->get_result();
$row=$res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<link href="https://fonts.googleapis.com/css?family=Caveat+Brush|Crete+Round|Frijole|Indie+Flower|Lobster|Love+Ya+Like+A+Sister|Shrikhand" rel="stylesheet">

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

<title><?php echo $x?> -  Your memories</title>
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
<a href="home.php"><h1 style="color:orange;font-family:Shrikhand;text-align:center">Slam it!</h1></a>
<h3 style="color:cyan;font-family:Indie Flower;text-align:center">Relive your memories!</h3>
<div class="row">
<div class="col-sm-2"></div>
<div class="col-sm-8">
<h2 style="color:gold;font-family:Love Ya Like A Sister">About himself:</h2>
<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Name:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["sname"];?></scope></h4>
</div>

<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Nickname:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["niname"];?></scope></h4>
</div>
<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Date of Birth:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["bday"];?></scope></h4>
</div>
<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">If he/she want to meet anyone,it would be:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["meet"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">If he/she had 3 wishes, what would they be:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["wishes"];?></scope></h4>
</div>

<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Favorite sports and teams:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["sports"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Favorite songs and music:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["music"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Where will he/she want to be in 20 years:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["nxt"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">What things iritate him/her the most:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["siritate"];?></scope></h4>
</div>

<h2 style="color:gold;font-family:Love Ya Like A Sister">About Myself:</h2>
<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Things that gets into his/her mind when you hear my name:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["things"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">My weakness:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["weak"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">My strength:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["strong"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">What people say about me:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["psay"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">His/her first impression on me:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["fimp"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">His/her present impression on me:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["pimp"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Worst habit of me:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["worst"];?></scope></h4>
</div>


<div class="well well-sm">
<h4 style="color:OliveDrab;font-family:Frijole">Advices to me:
<scope style="color:royalblue;font-size:25px;font-family:Caveat Brush">
<?php echo  $row["advice"];?></scope></h4>
</div>


</div>
<div class="col-sm-2"></div>
</div>
</body>
</html>