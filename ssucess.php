<?php
$user=$_POST["username"];
$pass=$_POST["password"];
$pass=md5($pass);
$fname=$_POST["fname"];
$age=$_POST["age"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$gplay=$_POST["gplay"];
$gender=$_POST["gender"];
$con=mysqli_connect("localhost","root","","sport");
$sql="insert into userinfo values('$user','$pass','$fname','$age','$email','$phone','$gender','$gplay')";
if(mysqli_query($con,$sql))
{
echo("<script LANGUAGE='JavaScript'>
window.alert('$user Created Successfully');
window.location.href='login.php';</script>
");
}
else
{
echo("ERROR");
}
?>