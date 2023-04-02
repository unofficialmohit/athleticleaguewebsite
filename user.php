<?php
session_start();
$user=$_POST['user'];
$pass=$_POST['pass'];
$pass=md5($pass);
$con=mysqli_connect("localhost","root","","sport");
$sql="select * from userinfo where username='$user' and password='$pass'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
if($count==1)
{   
    $_SESSION['username']=$user;
    $_SESSION['password']=$pass;
    echo("
    <script LANGUAGE='JAVASCRIPT'>
    window.alert('LOGIN SUCCESFULL');
    window.location.href='index.php';
    </script>
    ");
}
else if($count>1)
{
    echo("
    <script LANGUAGE='JAVASCRIPT'>
    window.alert('Sync Error Please Contact Administrator');
    window.location.href='login.php';
    </script>
    ");  
}
else
{
    echo("
    <script LANGUAGE='JAVASCRIPT'>
    window.alert('$pass LOGIN ERROR , USER NOT FOUND');
    window.location.href='login.php';
    </script>
    ");  
}

?>