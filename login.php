<html>
<head>
<title>Login Page</title>
<link rel="stylesheet" type"text/css" href="css/mystyle.css">
<link rel="icon" type="image/x-icon" href="/image/logo.png">
</head>
<body>

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
    <button onclick="window.location.href='signup.php';">Signup</button>
   </header>
<form action=user.php method="POST"><br><br><br>
USERNAME<input type="text" name="user" placeholder="Username Here.."><br><br>
PASSWORD<input type="password" name="pass" placeholder="Password Here.."><br><br><br><br>
<button type="submit">Submit</button>
</form>
<?php include 'footer.php';?>
</body>
</html>