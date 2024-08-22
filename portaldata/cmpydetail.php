<?php
$a=$_GET['c1'];
$b=$_GET['c2'];
$c=$_GET['c3'];
$d=$_GET['c4'];
$e=$_GET['c5'];
$f=$_GET['c6'];
$g=$_GET['c7'];
$con=mysqli_connect('localhost','root','Paralyadav#29','placement',3306);
$q="insert into cmpy_details value('$a','$b','$c','$d','$e','$f','$g')";
$rs=mysqli_query($con,$q);
if($rs)
echo"save";
else
echo"error";
?>