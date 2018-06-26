<!DOCTYPE html>
<?php
session_start();
if(!isset($_POST["sname"]))
{
	header('Location: form.php');
}
$con=mysqli_connect("localhost","root","","slambook");
$a=$_POST["sname"];
$b=$_POST["niname"];
$c=$_POST["bday"];
$d=$_POST["meet"];
$e=$_POST["wishes"];
$f=$_POST["sports"];
$g=$_POST["music"];
$h=$_POST["nxt"];
$i=$_POST["siritate"];
$j=$_SESSION["fid"];
$k=$_POST["things"];
$l=$_POST["weak"];
$m=$_POST["strong"];
$n=$_POST["psay"];
$o=$_POST["fimp"];
$p=$_POST["pimp"];
$q=$_POST["worst"];
$r=$_POST["advice"];
$smt=$con->prepare("insert into slam (sname,niname,bday,meet,wishes,sports,music,nxt,siritate,rname,things,weak,strong,psay,fimp,pimp,worst,advice)values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
$smt->bind_param("ssssssssssssssssss",$a,$b,$c,$d,$e,$f,$g,$h,$i,$j,$k,$l,$m,$n,$o,$p,$q,$r);
$smt->execute();
header('Location: done.php');
?>
