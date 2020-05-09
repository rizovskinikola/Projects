<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="css/form.css">
</head>
<body>
	<div class="header">
		<h2>Регистрирај се</h2>
	</div>
	
	<form method="post" action="register.php">

		<?php include('errors.php'); ?>


		<div class="input-group">
			<input autocomplete="off" type="text" name="username" placeholder = "Корисничко име"  value="<?php echo $username; ?>">
		</div>
		<div class="input-group">
			<input type="email" name="email" placeholder = "Е-пошта"  value="<?php echo $email; ?>">
		</div>
		<div class="input-group">
			<input type="password" name="password_1" placeholder = "Лозинка">
		</div>
		<div class="input-group">
			<input type="password" name="password_2" placeholder = "Потврди лозинката">
		</div>
		<div class="input-group">
			<input autocomplete="off" type="text" name="name" placeholder="Име">
		</div>
		<div class="input-group">
			<input autocomplete="off" type="text" name="surname" placeholder="Презиме">
		</div>
		<div class="input-group">
			<input autocomplete="off" type="text" name="company_name" placeholder = "Компанија">
		</div>
		<div class="input-group">
			<input autocomplete="off" type="nubmer" name="number" placeholder="Телефонски број">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Потврди</button>
		</div>
		<p class="pull-right">
		Веќе сте член?<a href="login.php">Најави се</a>
		</p>
	</form>
</body>
</html>