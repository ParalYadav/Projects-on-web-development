<?php
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];
$e=$_GET['a5'];
$con=mysqli_connect('localhost','root','Paralyadav#29','placement',3306);
$q="insert into notification value('$a','$b','$c','$d','$e')";
$rs=mysqli_query($con,$q);
if($rs)
echo"save";
else
echo"error";
?>