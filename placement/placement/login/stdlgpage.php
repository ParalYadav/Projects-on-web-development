<!DOCTYPE html>
<html lang="en">
<?php
$ShowAlert=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
$con= mysqli_connect('localhost','root','Paralyadav#29','placement');
$Email=$_POST['Email'];
$Password=$_POST['Password'];
$sql="select*from stdreg where Email='$Email' and Password='$Password'";
    $rs=mysqli_query($con,$sql);
    if($row=mysqli_fetch_array($rs))
    {
        header("location:home1.php");
    }
    else
    {
        $ShowAlert="invalid username or password";
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placement</title>
    <link rel="stylesheet" href="list.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style>
    </style>
</head>
<body>
    <div class="blur"></div>
    <div class="container">
        <div class="block">
            <h1 class="heading">PLACEMENT PORTAL</h1>
                <div class="inner_block">
                    <div class="box">
                        <p class="p">Student Login</p>
                        <?php
                        if($ShowAlert)
                        {
                            echo"<p class='p1'>invalid username or password</p>";
                        }
                        ?>
                        <form action="stdlgpage.php" method="POST">
                        <div class="box1">
                            <p>Email</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="text"
                                    placeholder="&#xf0e0; Enter Email" name="Email">
                            </div>
                            <p>Password</p>
                            <div class="block1">
                                <input style="font-family: 'Font Awesome 5 Free';font-weight: 700" type="text"
                                    placeholder="&#xf023; Enter Password" name="Password">
                            </div>
                            <input type="submit" value="Login" class="btn">
                        </div>
                    </div>
                    </form>
                </div>
        </div>
    </div>
</body>
</html>