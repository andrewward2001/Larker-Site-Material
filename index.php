<!doctype html>
<html>
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
<?php
include("inc/connect.inc.php");
?>
<body>
    <header class="header">
		<div class="clearfix pull-left">
			<ul class="nav nav-list pull-left">
				<li>
					<a class="menu-toggle" href="#menu">
						<span class="access-hide">Menu</span>
						<span class="icon icon-menu"></span>
						<span class="header-close icon icon-close"></span>
					</a>
				</li>
			</ul>
			<a class="header-logo" href="index.php">LARKer Site</a>
		</div>
		<div class="clearfix pull-right">
			<ul class="nav nav-list pull-right">
				<li>
					<a class="menu-toggle" href="#profile">
						<span class="access-hide">
							<?php
								if(!$user) {
									echo "Not loggin in.";
								} else {
									echo $user;
								}
							?>
						</span>
						<span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span>
						<span class="header-close icon icon-close"></span>
					</a>
				</li>
			</ul>
		</div>
	</header>
    <nav class="menu" id="menu">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="ui-card.html">Home</a>
						</li>
						<li>
							<a href="ui-collapse.html">FAQ</a>
						</li>
						<li>
							<a href="ui-dropdown.html">About Us</a>
						</li>
						<li>
							<a href="ui-modal.html">Contact Us</a>
						</li>
					</ul>
					<hr>
					<ul class="nav">
						<li>
							<a href="ui-button.html">LARKer Information</a>
						</li>
						<li>
							<a href="ui-form.html">LARKer Login</a>
							<span class="menu-collapse-toggle collapsed" data-target="#form-elements" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
							<ul class="menu-collapse collapse" id="form-elements">
								<li>
									<a href="ui-form-adv.html">Account Tools</a>
								</li>
                                <li>
                                    <a href="#">Administrator Tools</a>
                                </li>
							</ul>
						</li>
					</ul>
                    <hr>
				</div>
			</div>
		</div>
	</nav>
    <nav class="menu menu-right" id="profile">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-img">
						<img alt="John Smith" src="images/samples/landscape.jpg">
					</div>
					<div class="menu-top-info">
						<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span>
						<?php
							if(!$user) {
								echo "Not Logged In.";
							} else {
								echo $user;
							}
						?>
						</a>
					</div>
				</div>
				<?php
				if(!$user){
					echo '
						<div class="menu-content">
							<ul class="nav">
								<li><a href="login-iframe.php">Login</a></li>
							</ul>
						</div>
					';
				} else {
					echo ';
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="javascript:void(0)"><span class="icon icon-account-box"></span>Account Settings</a>
						</li>
                        <li>
                            <a href="javascript:void(0)"><span class="icon icon-settings"></span>Administrator Tools</a>
                            <span class="menu-collapse-toggle collapsed" data-target="#admin-tools" data-toggle="collapse"><i class="icon icon-close menu-collapse-toggle-close"></i><i class="icon icon-add menu-collapse-toggle-default"></i></span>
                            <ul class="menu-collapse collapse" id="admin-tools">
                                <li>
                                    <a href="#">Userlist</a>
                                </li>
                            </ul>
                        </li>
						<li>
							<a href="#logout_iframe"><span class="icon icon-exit-to-app"></span>Logout</a>
						</li>
					</ul>
				</div>
				';
				}
				?>
			</div>
		</div>
	</nav>
	<div class="content">
		<div class="content-heading">
			<div class="container">
				<h1 class="heading">Home</h1>
			</div>
		</div>
	</div>
	<footer class="footer">
		<div class="container">
			<p>Material</p>
		</div>
	</footer>
	<div class="fbtn-container">
		<div class="fbtn-inner">
			<!--<a class="fbtn fbtn-orange" href="https://github.com/Daemonite/material"><span class="fbtn-text">Check out the theme on GitHub</span><span class="fa fa-github"></span></a>-->
		</div>
	</div>

	<div aria-hidden="true" class="modal fade in" id="logout_iframe" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<iframe class="iframe-seamless" src="logout-iframe.php"></iframe>
				<div class="modal-footer">
			</div>
		</div>
	</div>

	<div aria-hidden="true" class="modal fade in" id="login_iframe" role="dialog" tabindex="-1">
		<div class="modal-dialog modal-full">
			<div class="modal-content">
				<iframe class="iframe-seamless" src="login-iframe.php"></iframe>
			</div>
		</div>
	</div>
	<script src="js/base.js" type="text/javascript"></script>
</body>
</html>