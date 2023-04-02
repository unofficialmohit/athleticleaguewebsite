<html>
<head>
<title>Register</title>
<link rel="stylesheet" type"text/css" href="css/mystyle.css">
<link rel="icon" type="image/x-icon" href="/image/logo.png">
</head>
<body>
<?php 
session_start(); 
if(isset($_SESSION['username']))
{
$user=$_SESSION['username'];
$con=mysqli_connect("localhost","root","","sport");
$sql="select * from event where username='$user'";
$result=mysqli_query($con,$sql);
$count=mysqli_num_rows($result);
?>
<header>
    <div class="logo">
    <p><a href="index.php">Athletic League</a></p>
    </div>
    <nav>
<ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="achievement.php">Achievements</a></li>
    <li><a href="gallery.php">Gallery</a></li>
    <li> <a href="register.php">Register for Event</a></li>
</ul>
</nav>



    <button onclick="window.location.href='logout.php';">Logout</button>
   </header> 
   <?php if($count==0){?>
    <br><br><br><br><form action="rsucess.php" method="POST">
 <h2>Country :<input type="text" name="country"><br><br>
 ID Card :&nbsp<input type="text" name="acard"><br><br>
  Select Event :
   <br>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sevent" value="Track and field" required>Track and field
 <br>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sevent" value="Road running">Road running&nbsp
 <br>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sevent" value="Cross country running">Cross country running&nbsp
  <br>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sevent" value="Racewalking">Racewalking&nbsp
  <br>&nbsp&nbsp&nbsp&nbsp<input type="radio" name="sevent" value="Marathon">Marathon&nbsp<br><br><br><br>
  &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp &nbsp&nbsp <button type=submit>Submit</button>
   </form>
<?php
 }
else
{
$row=mysqli_fetch_array($result);
$country=$row['country'];
$acard=$row['acard'];
$sevent=$row['sevent'];
echo "
<div class='set' style=\"border:1px solid black;\">You were Already Registered for a Event:<br><br>
Username = $user<br>
Selected Event = $sevent<br>
ID Card = $acard<br>
Country = $country
<br>
</div>
";
}
} 
else{ 
    echo("
    <script LANGUAGE='JAVASCRIPT'>
    window.alert('Please Login to Register for an Event');
    window.location.href='login.php';
    </script>
    ");
} ?>
<?php include 'footer.php';?>
</body>
</html>