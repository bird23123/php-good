<?php
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

?>
	<!DOCTYPE html>
	<html>

	<head>
		<title>HOME</title>
		<link rel="stylesheet" type="text/css" href="css/style1php.css" <? echo time(); ?>>
	</head>

	<body>
		<h1>Hello, <?php echo $_SESSION['email']; ?></h1>
		<nav class="home-nav">
			<a href="change-password.php">Change Password</a>
			<a href="logout.php">Logout</a>
			<a href="index.php">Main page</a>
		</nav>

	</body>

	</html>

<?php
} else {
	header("Location: /");
	exit();
}
?>