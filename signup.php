<html>
<head>
<title>WELCOME</title>
<link rel="stylesheet" type"text/css" href="css/mystyle.css">
<link rel="icon" type="image/x-icon" href="/image/logo.png">
</head>
<body>

<?php include 'navbar.php';?>
<form action="ssucess.php" method="POST"><br>
USERNAME &nbsp&nbsp<input type="text" name="username"><br><br>
PASSWORD&nbsp&nbsp <input type="text" name="password"><br><br>
Age &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="age"><br><br>
Father Name&nbsp&nbsp&nbsp<input type="text" name="fname"><br><br>
Games Played<input type="text" name="gplay"><br><br>
Email Address <input type="text" name="email"><br><br>
Phone Number<input type="text" name="phone"><br><br>
Gender:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Male&nbsp&nbsp<input type="radio" name="gender" value="male" checked required>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
Female&nbsp&nbsp<input type="radio" name="gender" value="female"><br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit">Submit</button>
</form>
<?php include 'footer.php';?>
</body>
</html>