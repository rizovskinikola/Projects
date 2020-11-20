<?php 
	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$name = "";
	$surname = "";
	$company_name = "";
	$number ="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	

	try {
		$db = mysqli_connect('localhost', 'root', 'root', 'project2');} 
		catch(PDOException $e) {
		header("Location: register.php?status=error");
		die();
	}


	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$surname = mysqli_real_escape_string($db, $_POST['surname']);
		$company_name = mysqli_real_escape_string($db, $_POST['company_name']);
		$number = mysqli_real_escape_string($db, $_POST['number']);
		

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "Корисничко име е задолжително"); }
		if (empty($email)) { array_push($errors, "Е-пошта е задолжително"); }
		if (empty($password_1)) { array_push($errors, "Лозинка е задолжително"); }
		if (empty($name)) { array_push($errors, "Име е задолжително"); }
		if (empty($surname)) { array_push($errors, "Презиме е задолжително"); }
		if (empty($company_name)) { array_push($errors, "Компанија е задолжително"); }
		if (empty($number)) { array_push($errors, "Телефонски број е задолжително"); }

		if ($password_1 != $password_2) {
			array_push($errors, "Двете лозинки не се совпаѓаат");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO users (username, email,password, name, surname, company_name, number) 
					  VALUES('$username', '$email', '$password', '$name', '$surname', '$company_name', '$number')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Ви благодариме за вашата регистрација";
			header('location: index.php');
		}

	}



	// LOGIN USER
	if (isset($_POST['login_user'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);

		if (empty($username)) {
			array_push($errors, "Корисничко име е задолжително");
		}
		if (empty($password)) {
			array_push($errors, "Лозинка е задолжително");
		}

		if (count($errors) == 0) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				// $_SESSION['username'] = $username;
				// $_SESSION['success'] = "Успешно се логиравте";
				header('location: landingpage.php');
			}else {
				array_push($errors, "Погрешна лозинка/корисничко име");
			}
		}
	}

?>