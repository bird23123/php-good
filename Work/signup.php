<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/stylephp.css" <? echo time(); ?>>
	<title>SIGN UP</title>
</head>

<body>
	<div class="container">
		<div class="header">
			<h2>Create Account</h2>
		</div>
		<form action="signup-check.php" method="post" class="form" id="form1">
			<?php if (isset($_GET['error'])) { ?>
				<p class="error"><?php echo $_GET['error']; ?></p>
			<?php } ?>

			<?php if (isset($_GET['success'])) { ?>
				<p class="success"><?php echo $_GET['success']; ?></p>
			<?php } ?>

			<div class="form-control">
				<label>Email</label>
				<?php if (isset($_GET['email'])) { ?>
					<input type="email" name="email" id="email" placeholder="Email" value="<?php echo $_GET['email']; ?>">
				<?php } else { ?>
					<input type="email" name="email" id="email" placeholder="Email">
				<?php } ?>
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>

			<div class="form-control">
				<label>Username</label>
				<?php if (isset($_GET['uname'])) { ?>
					<input type="text" name="uname" id="uname" placeholder="Username" value="<?php echo $_GET['uname']; ?>">
				<?php } else { ?>
					<input type="text" name="uname" id="uname" placeholder="User Name">
				<?php } ?>
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>

			<div class="form-control">
				<label>Password</label>
				<input type="password" name="password" id="password" placeholder="Password">
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>

			<div class="form-control">
				<label>Re Password</label>
				<input type="password" name="re_password" id="re_password" placeholder="Re_Password">
				<i class="fas fa-check-circle"></i>
				<i class="fas fa-exclamation-circle"></i>
				<small>Error message</small>
			</div>

			<div class="form-control">
				<button type="submit" name="submit" class="btn">Submit</button>
			</div>
			<a href="login.php" class="ca">Already have an account?</a>
		</form>
	</div>

	<!-- <script src="js/app.js"></script> -->
</body>

</html>