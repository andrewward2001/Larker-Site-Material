<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lark";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn) {
	die("Connection Failed: " . mysqli_connect_error());
}

session_start();
if(!isset($_SESSION["user_login"])) {
	$user = "";
} else {
	$user = $_SESSION["user_login"];
}

$error = "";

if (isset($_POST['username']) && isset($_POST['password'])) {
 	$username = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["username"]);
 	$password = preg_replace('#[^A-Za-z0-9]#i', '', $_POST["password"]);

    $password_md5 = md5($password);
    $sql_prep = "SELECT `id` FROM `users` WHERE username='$username' AND password='$password_md5' LIMIT 1";
    $sql = mysqli_query($conn, $sql_prep);
        
    $userCount = mysqli_num_rows($sql);
	if ($userCount == 1) {
		while($row = mysqli_fetch_array($sql)) {
			$id = $row["id"];
		}

		$_SESSION["user_login"] = $username;
		header('Location: index.php');
		exit();
	} else {
		echo 'This information is incorrect, try again.';
		exit();
	}

}
?>
<!DOCTYPE html>
<html lang="en" class=" js flexbox flexboxlegacy no-touch backgroundsize boxshadow csstransforms csstransforms3d">
<head>
	<meta charset="utf-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>LARKer Site</title>

	<!-- css -->
	<link href="css/base.min.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.js" type="text/javascript"></script>
		<![endif]-->
</head>
<body>
	<header class="header">
		<div class="clearfix pull-left">
			<span class="header-logo margin-left"><a href="index.php">LARKer Login</a></span>
		</div>
	</header>
	<div class="content" height="100%">
		<div class="content-heading">
		</div>
		<!--<div class="content-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-lg-push-4 col-sm-6 col-sm-push-3 col-xs-10 col-xs-push-1">
						<div class="card-wrap">
							<div class="card">
								<div class="card-main">
									<div class="card-header">
										<div class="card-inner">
											<h1 class="card-heading">Login</h1>
										</div>
									</div>
									<div class="card-inner">
										<p class="text-center">
											<span class="avatar avatar-inline avatar-lg">
												<img alt="Login" src="images/users/avatar-001.jpg">
											</span>
										</p>
										<form class="form" action="login-iframe.php" method="post">
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-username">Username</label>
														<input class="form-control" id="login-username" name="username" type="text">
													</div>
												</div>
											</div>
											<div class="form-group form-group-label">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<label class="floating-label" for="login-password">Password</label>
														<input class="form-control" id="login-password" name="passowrd" type="password">
													</div>
												</div>
											</div>
											<div class="form-group">
												<div class="row">
													<div class="col-md-10 col-md-push-1">
														<button class="btn btn-block btn-blue waves-button waves-effect waves-light" name="login">Sign In</button>
														<?php //echo $error; ?>
													</div>
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<iframe src="../larkin.php" width="100%" style="height: 100%;"></iframe>
	</div>
	<script src="js/base.min.js" type="text/javascript"></script>
</body>
</html>