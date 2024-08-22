<a href='show.php'>show</a>
      <br>
      <?php
$a=$_POST['s1'];
$b=$_POST['s2'];
$c=$_POST['s3'];
$d=$_POST['s4'];
$e=$_POST['s5'];
$f=$_POST['s6'];
$g=$_POST['s7'];
$h=$_POST['s8'];
$i=$_FILES['s9']['tmp_name'];
$j=$_FILES['s9']['name'];
if(move_uploaded_file($i,$j))
{
    $con=mysqli_connect('localhost','root','Paralyadav#29','placement',3306);
    $q="insert into std_details value('$a','$b','$c','$d','$e','$f','$g','$h','$j')";
    $rs=mysqli_query($con,$q);
    echo"save successfully";
}
else
{
    echo"error while upload";
}
?>