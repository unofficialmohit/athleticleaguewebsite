<?php 
session_start(); 
if(isset($_SESSION['username']))
{
$user=$_SESSION['username'];
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
<?php
 } 
else{ ?>
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
    <button onclick="window.location.href='login.php';">Login</button>
   </header> 
<?php } ?> 