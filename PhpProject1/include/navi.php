<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8" />
	</head>
	<body class="is-preload">
        <!-- Nav -->
        <nav id="menu">
        	<ul class="links">
        	<?php if(isset($_SESSION['user'])) { ?>
        		<li><a href="/workspace/PHPProject/PhpProject1/">Home</a></li>
        		<li><a href="/workspace/PHPProject/PhpProject1/member/logout.php">Logout</a></li>
        		<li><a href="/workspace/PHPProject/PhpProject1/contents/generic.php">Generic</a></li>
        		<li><a href="/workspace/PHPProject/PhpProject1/contents/elements.php">Elements</a></li>
        	<?php } else { ?>
        		<li><a href="/workspace/PHPProject/PhpProject1/">Home</a></li>
        		<li><a href="/workspace/PHPProject/PhpProject1/member/login.php">Login</a></li>
        	<?php } ?>
        	</ul>
        </nav>
	</body>
</html>