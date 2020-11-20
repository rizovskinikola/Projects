<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>

	<div class="header">
		<h2> Најави се</h2>
	</div>
	
	<form method="post" action="login.php">

		<?php include('errors.php'); ?>

		<div class="input-group">
			<input type="text" name="username" placeholder=" Корисничко име" >
		</div>
		<div class="input-group">
			<input type="password" name="password" placeholder=" Лозинка">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user"> Најави се</button>
		</div>
		<p>
		Не сте член? <a href="register.php">Регистрирај се</a>
		</p>
	</form>


</body>
</html>