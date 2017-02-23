<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: ../export/index.php");
}
?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<title>Login to View MFERD Conference Details</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">

<div id="login" class="center">
	<h2>To View Registration Details. Login Here!!</h2>
	<form action="" method="post">
		<label>User Name :</label>
		<input id="name" name="username" placeholder="username" type="text">
		<label>Password :</label>
		<input id="password" name="password" placeholder="**********" type="password">
		<br>&nbsp;
		<input name="submit" type="submit" value=" Login ">
	<span style="color:Red"><?php echo $error; ?></span>
	</form>
	</div>
</div>
</body>
</html>