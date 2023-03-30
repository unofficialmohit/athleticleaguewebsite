<?php session_start();?>
<html>
<head>
<title>WELCOME</title>
<link rel="stylesheet" type"text/css" href="css/mystyle.css">
</head>
<body>
<?php 
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
   <div class="maindiv"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
 echo"<h1 style=\"text-align: center;\">WELCOME $user</h1>";
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
   <div class="maindiv"></div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1 style="text-align: center;">WELCOME GUEST</h1><?php } ?>
<div class="home">
<h1>What is Athletic : </h1><br>
<h2 >Athletics is a group of sporting events that involves competitive running, jumping, throwing, and walking.
The most common types of athletics competitions are track and field, road running, cross country running, and racewalking.
The results of racing events are decided by finishing position (or time, where measured), while the jumps and throws are won 
by the athlete that achieves the highest or furthest measurement from a series of attempts. 
The simplicity of the competitions, and the lack of a need for expensive equipment, 
makes athletics one of the most common types of sports in the world. Athletics is mostly an individual sport, 
with the exception of relay races and competitions which combine athletes performances for a team score, 
such as cross country. </h2>
</div>
<div class="home"><h1> Track and Field Events – Different types of events in athletics & how one athletic event differs from another<h1> 
<br>
<h1>Track Events in Athletics:</h1><br>
<h2>Sprints (Running events in Athletics):</h2>
<h3>Races over short distances are sprints. It is focused on reaching the maximum speed and covering short distances as quickly as possible. 
    There are three sprinting events that occur in the Olympics and outdoor World Championships: 100 meters, 200 meters, and 400 meters.
</h3>
<h2>Middle Distance (Running events in Athletics):<h2>
<h3>The 800 m, 1500m, and a mile run are generally included in the middle distances events. Endurance and race tactics are more important than the speed beyond the sprinting races. 
    In some places, the 3000 m event is also a part of the middle distance track events.</h3>
<h2>Long Distance (Running events in Athletics):</h2>
<h3>The 3000m, 5000m, and 10000m are some common long-distance track events. Stamina, endurance, race tactics, and similar skills become much more important in these types of events in athletics</h3>
<h2>Relay Races (Running events in Athletics):</h2>
<h3>The only team event in track and field events are the relay races. A team of 4 athletes, each run their specific distances and hands over a baton in a designated area to the next runner of the team. The most common relay races are 4×100 m and 4×400 m. Also, some less common relays are 4×200 m, 4×800 m, and 4×1500 m.
The major rule of relay race is – every athlete has to carry a baton & hand it over to the next team member without dropping it. The distance covered by each athlete depends on the type of relay race (4X100m or 4X400m)
The baton exchange must take palce within a 20m changeover box. This box is located 10m before & 10m after the start of each leg, starting from the 2nd athlete</h3>
<h2>Hurdling (Running events in Athletics):</h2>
<h3>Races with obstacles or hurdles are under this category. Popular events in the Olympics that come under the category are 100 m hurdles for Women, 110 m hurdles for men, and 400 m hurdles for both sexes. Also, some American competitions include 300m hurdles.
</h3><br>
<h1>Jump Events in Athletics:</h1><br>
<h2>Long Jump (Jumping events in Athletics):</h2>
<h3>Athletes sprint on a track followed by a jumping board and a sandpit. The athletes must jump before a marked line. The achieved distance is then measured from the nearest point of sand disturbed by the athlete’s body. A standing long jump event also exists with the traditional version.</h3>

<h2>Triple Jump (Jumping events in Athletics):</h2>
<h3>The triple jump event has a similar setup as that of the long jump. The only change is 2 steps that the athlete takes before jumping into the pit. The process includes hop, step, and jump. Standing triple jump is very uncommon from the competitive perspective but has seen some usage as drills in other sports.</h3>
<h2>High Jump (Jumping events in Athletics):</h2>
<h3>The athletes run a short run-up and take off to jump over a horizontal bar to land on a cushioned bed on the other side. The height of the bar is recorded as the registered height jumped by the athlete.</h3>
<h2>Pole Vault (Jumping events in Athletics):</h2>
<h3>The athlete runs down a strip of track, plants the pole in a metal box, and vaults over a horizontal bar at a certain height before letting go of the pole and falling backward onto landing mattresses. While earlier versions used metal, wooden, or bamboo, the modern poles are generally made from artificial materials such as carbon fiber or fiberglass.</h3>
<br>
<h1>Throw Events in Athletics:</h1><br>
<h2>Shot Put:</h2>
<h3>The round shot styled ammunition used for the sport, hence the term shot put. The athlete throws a 16 pound (7.26kg) (4kg for women) shot put from within a circular area of 7 feet in diameter.</h3>
<h2>Discus Throw:</h2>
<h3>A heavy disc takes place of the spherical shot put in this event. The disc is 2kg and 22cm in diameter.</h3>
<h2>Javelin Throw:</h2>
<h3>A short run-up to the foul line and then the athlete releases the javelin. The current javelin specifications are 2.2 to 2.3 m and 600 g for women, 2.6 to 2.7 m in length, and 800 grams in weight for men.</h3>
<h2>Hammer Throw:</h2>
<h3>A metal ball weighing 16 pounds (4kg for women) is attached to a wire measuring 1.175m-1.215m. This is rotated and thrown in a direction angled within 34.92 degrees.</h3>
<br>
<h1>Events in Athletics: Combined Events:</h1><br>
<h2>Road Running Events in Athletics:</h2>
<h3>Unlike the track and field events where the run is on proper running tracks, this division comprises of events that are run on the road. These events are run on established roads on the measured courses. They are long-distance runs ranging from 5 km to 42.2 km in a marathon. Aerobic endurance and stamina are key to success in such events. The nine common distances for road races that IAAF recognizes: 10 kilometers, 15 kilometers, 20 kilometers, half-marathon (21.097 km), 25 kilometers, 30 kilometers, marathon (42.195 km), 100 kilometers, and Ekiden marathon relay.</h3>
<h2>Cross Country Running:</h2>
<h3>It is the natural terrain version of long-distance running. In this event, teams or individual runs through natural terrain courses, comprising of grass, hill, flat ground, gravel road, etc. The courses are generally 4-12 km long. An ideal cross country course has a loop of 1,750 to 2,000 meters according to IAAF. It should be covered by grass, as much as possible, and include rolling hills “with smooth curves and short straights”.</h3>
<h2>Race Walking:</h2>
<h3>This is one of the most unique events in athletics. Race Walking is the kind of foot-race in which one foot should be in contact with the floor at all times. The race judges who are on the sidelines for the same are responsible for the assessment. The two racewalking distances contested at the Summer Olympics are the 20 kilometers race walk (men and women) and 50 kilometers race walk (men only).</h3>
</div>
<h1>Images of our organized events :</h1>
<table style="width:100%;" cellpadding="5" border-collapse="0">
<tr >
<td><img src="image/1.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/2.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/3.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/4.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/5.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/6.jpg" style="width:239px; height:200px;"></td>
</tr>
<tr>
<td><img src="image/7.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/8.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/9.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/10.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/11.jpg" style="width:239px; height:200px;"></td>
<td><img src="image/12.jpg" style="width:239px; height:200px;"></td>
</tr>
</table><br>
<button style="width:300px; height:80px" onclick=window.location.href='gallery.php';>See All Pictures</button>
<br><Br><Br><Br><BR><BR><BR><BR><br>
<?php include 'footer.php';?>
</body>
</html>