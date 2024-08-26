<!DOCTYPE html>
<html lang="en">
<?php
$ShowAlert=false;
$ShowAlert1=false;
$ShowAlert2=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];
    $CPassword=$_POST['CPassword'];
$con= mysqli_connect('localhost','root','Paralyadav#29','placement');
// $exists=false;
if(($Email!="") && ($Password!="") && ($CPassword!=""))
{
    if($CPassword==$Password)
    {
        $check = "select*from stdreg where Email='$Email'";
        $result = mysqli_query($con,$check);
        $count = mysqli_num_rows($result);
        if($count>0)
        {
           $ShowAlert2="Email Already Exist";
        }
        else
        {
            $sql="insert into stdreg value('$Email','$Password')";
            $rs=mysqli_query($con,$sql);
            header("location:home1.php");
        }
    }
    else
    {
        $ShowAlert="Password Do Not Match";
    }
    }
else
{
    $ShowAlert1="field can not be empty";
}
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement</title>
    <link rel="stylesheet" href="register.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
    </style>
    
</head>

<body>
    <div class="blur"></div>
    <div class="container">
        <div class="block">
            <h1 class="heading">PLACEMENT PORTAL</h1>
            <div class="blk">
                <div class="inner_block">
                    <div class="box">
                        <p class="para">Admin Register</p>
                        <?php
                        if($ShowAlert)
                        {
                            echo"<p class='p1'>$ShowAlert</p>";
                        }
                        if($ShowAlert1)
                        {
                            echo"<p class='p1'>$ShowAlert1</p>";
                        }
                        if($ShowAlert2)
                        {
                            echo"<p class='p1'>$ShowAlert2</p>";
                        }
                        ?>
                        <form action="adminreg.php" method="POST">
                        <div class="box1">
                            <p>Email</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="email"
                                    placeholder="&#xf0e0;  Enter Email" name="Email">
                            </div>
                            <p>Password</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="text"
                                    placeholder="&#xf023;  Enter Password" name="Password">
                            </div>
                            <p>Confirm Password</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="text"
                                    placeholder="&#xf023;  Confirm Password" name="CPassword">
                            </div>
                           <input type="submit" value="Register"class="btn">
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>