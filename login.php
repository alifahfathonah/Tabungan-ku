
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta name="description" content="Admin, Dashboard, Bootstrap" />
	<link rel="shortcut icon" sizes="196x196" href="../assets/images/logo.png">
	
	<link rel="stylesheet" href="assets/bower/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/bower/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" href="assets/bower/animate.css/animate.min.css">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/core.css">
	<link rel="stylesheet" href="assets/css/misc-pages.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800,900,300">
</head>
<body class="simple-page">
	<div class="simple-page-wrap">
		<div class="simple-page-logo animated swing">
			<a href="#">
				<span><i class="fa fa-gg"></i></span>
				<span>Tabunsgan Sekolah</span>
			</a>
		</div><!-- logo -->
		<div class="simple-page-form animated flipInY" id="login-form">
	<h4 class="form-title m-b-xl text-center">Login akun tabungan sekolah</h4>
	<?php 
		$get = $_GET['m'];
		if (isset($get)) {
			if ($get === 'fail') {
				echo '
				<div class="alert alert-danger">
				  <strong>Login Gagal!</strong> Cek kembali username dan password.
				</div>
				';
			}
		} else {

		}

	?>
	<form action="process/login.php" method="post">
		<div class="form-group">
			<input id="sign-in-email" type="text" class="form-control" placeholder="Username" name="username">
		</div>

		<div class="form-group">
			<input id="sign-in-password" type="password" class="form-control" placeholder="Password" name="password">
		</div>
		<input type="submit" class="btn btn-primary" value="SING IN">
	</form>
</div><!-- #login-form -->

<div class="simple-page-footer">
	<p><a href="password-forget.html">FORGOT YOUR PASSWORD ?</a></p>
	<p>
		<small>Don't have an account ?</small>
		<a href="signup.html">CREATE AN ACCOUNT</a>
	</p>
</div><!-- .simple-page-footer -->


	</div><!-- .simple-page-wrap -->
</body>
</html>