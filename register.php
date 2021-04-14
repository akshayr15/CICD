<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
	<title>Registration system PHP and MySQL</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

	<title>Training Studio - Free CSS Template</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="font-awesome.css">

	<link rel="stylesheet" type="text/css" href="templatemo-training-studio.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<header class="header-area header-sticky" style="background: black;">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="index.php" class="logo" style="text-align: center;">Training<em> Studio</em></a>
						<!-- ***** Logo End ***** -->
						<!-- ***** Menu Start ***** -->

						<a class='menu-trigger'>
							<span>Menu</span>
						</a>
						<!-- ***** Menu End ***** -->
					</nav>
				</div>
			</div>
		</div>
	</header>


	<div class="container" style="margin-top: 100px;">
		<h4 style="text-align: center;margin: 10px;">Registration Form</h4>
		<form method="post" action="register.php">
			<?php include('errors.php'); ?>
			<div class="input-group">
				<label>Username</label>
				<input type="text" name="username" value="<?php echo $username; ?>">
			</div>
			<div class="input-group">
				<label>Email</label>
				<input type="email" name="email" value="<?php echo $email; ?>">
			</div>
			<div class="input-group">
				<label>Password</label>
				<input type="password" name="password_1">
			</div>
			<div class="input-group">
				<label>Confirm password</label>
				<input type="password" name="password_2">
			</div>
			<div class="input-group">
				<button type="submit" class="btn" name="reg_user">Register</button>
			</div>
			<p>
				Already a member? <a href="login.php">Sign in</a>
			</p>
		</form>
	</div>
</body>

</html>