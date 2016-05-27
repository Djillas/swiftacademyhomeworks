<!DOCTYPE html>
<html>
<title>
	Welcome to Facebook
</title>

<style>

	.sidenav {
		height: 100%;
		width: 0;
		position: fixed;
		z-index: 1;
		top: 0;
		left: 0;
		background-color: lightsteelblue;
		overflow-x: hidden;
		transition: 0.5s;
		padding-top: 250px;
		text-align:center;
		text-transform: full-size-kana;
	}


	.sidenav a {
		padding: 8px 8px 8px 32px;
		text-decoration: none;
		font-size: 25px;
		color: #818181;
		display: block;
		transition: 0.3s

	}

	.sidenav a:hover{
		color: #f1f1f1;
	}

	.closebtn {
		position: fixed;
		top: 0;
		right: 25px;
		font-size: 36px !important;
		margin-left: 50px;
	}

	@media screen and (max-height: 450px) {
		.sidenav {padding-top: 20px;}
		.sidenav a {font-size: 18px;}
	}
</style>
<body>

<div id="mySidenav" class="sidenav">
	<a href="javascript:void(2)" class="closebtn" onclick="closeNav()">☰</a>
	<a href="register.php" title="Users list">Register new user</a>
	<a href="search.php" title="Users list">Search</a>
	<a href="login.php" title="Login private area">Login</a>
	<?php if (isset($_SESSION['login'])&& $_SESSION['login']=="OK"):?>
	<a href="private.php"title="Private area">Private</a>
	<?php endif ?>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">☰ open</span>

<script>
	function openNav() {
		document.getElementById("mySidenav").style.width = "100%";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
</script>


</body>
</html>


