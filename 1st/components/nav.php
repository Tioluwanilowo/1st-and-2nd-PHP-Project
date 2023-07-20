<?php
$txt="";
$sgn="";
$sl="";
$lnk="./logout.php";
if (!isset($_SESSION['user_id'])) {
    $txt="Login";
	$sgn="Signup";
	$sl="./signup.php";
	$lnk="./login.php";
}else{
	$txt="Logout";
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Five Section Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<header>
		<nav>
			<ul>
				<li><a href="index.php">Home</a></li>
				<li><a href="<?php echo $sl;?>"><?php echo $sgn ?></a></li>
				<li><a href="<?php echo $lnk;?>"><?php echo $txt ?></a></li>
				<li><a href="./dashboard.php">Dashboard</a></li>
			</ul>
		</nav>
	</header>
