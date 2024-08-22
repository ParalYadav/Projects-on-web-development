<?php
$con=mysqli_connect('localhost','root','Paralyadav#29','placement',3306);
$q="select*from std_details";
$rs=mysqli_query($con,$q);
while($row=mysqli_fetch_array($rs))
{
    echo"$row[roll_no]
    $row[name]
    $row[branch]
    $row[semester]
    $row[mob_no]
    $row[tenth_percent]
    $row[twelfth_percent]
    $row[graduation]
    <img src='$row[photo]' width='200px'>";
}
?>