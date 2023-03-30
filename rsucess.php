<?php
session_start();
$country=$_POST['country'];
$acard=$_POST['acard'];
$sevent=$_POST['sevent'];
$user=$_SESSION['username'];
$con=mysqli_connect("localhost","root","","sport");
$sql="insert into event values ('$user','$country','$acard','$sevent')";
if(mysqli_query($con,$sql))
{
echo("
<script LANGUAGE='JAVASCRIPT'>
window.alert('You are Registered for $sevent Successfully !!');
window.location.href='index.php';
</script>
");
}
else{
    echo("
    <script LANGUAGE='JAVASCRIPT'>
    window.alert('Registration Failed');
    window.location.href='index.php';
    </script>
    ");  
}
?>