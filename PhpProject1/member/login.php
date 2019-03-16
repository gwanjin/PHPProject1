<?php session_start(); ?>
<!DOCTYPE HTML>
<!--
	Industrious by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Login - Industrious by TEMPLATED</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="stylesheet" href="../assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Header -->
		<?php
            include '../include/header.php';
            require '../include/navi.php';
		?>

		<!-- Heading -->
		<div id="heading" >
			<h1>PHP PROJECT HOMEPAGE</h1>
		</div>

		<!-- Main -->
		<section id="main" class="wrapper">
			<div class="inner">
				<div class="content">
	           <!-- Signin -->
				<div class="row">
					<div class="col-6 col-12-medium">
    					<!-- Form -->
    					<h3>Sign In</h3>
    					<form method="post" action="membercheck.php">
            				<div class="row gtr-uniform">
                				<div class="col-12">
        							<input type="email" name="email" id="email" value="" placeholder="Email" />
        						</div>
        						<div class="col-12">
        							<input type="password" name="password" id="password" value="" placeholder="Password" />
        						</div>
        						<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Sign In" class="primary" /></li>
									</ul>
								</div>
            				</div>
    					</form>
    				</div>
    				<div class="col-6 col-12-medium">
    					<!-- Form -->
    					<h3>Sign Up</h3>
    					<form method="post" action="membercheck.php">
            				<div class="row gtr-uniform">
                				<div class="col-12">
        							<input type="email" name="email" id="email" value="" placeholder="Email" />
        						</div>
        						<div class="col-12">
        							<input type="password" name="password" id="password" value="" placeholder="Password" />
        						</div>
        						<div class="col-12">
        							<input type="text" name="name" id="name" value="" placeholder="Name" />
        						</div>
        						<div class="col-12">
									<ul class="actions">
										<li><input type="submit" value="Sign Up" class="primary" /></li>
										<li><input type="reset" value="Reset" /></li>
									</ul>
								</div>
            				</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    
	<!-- Scripts -->
	<script src="../assets/js/jquery.min.js"></script>
	<script src="../assets/js/browser.min.js"></script>
	<script src="../assets/js/breakpoints.min.js"></script>
	<script src="../assets/js/util.js"></script>
	<script src="../assets/js/main.js"></script>
	</body>
</html>