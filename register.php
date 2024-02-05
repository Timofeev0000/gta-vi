<?php 
session_start();

if ($_SESSION['user'] ?? false) {
	header('Location: /');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/login.css">
	<title>Регистрация</title>
</head>
<body>
	<div class="wrapper">
		<form action="vendor/signup.php" method="post">
			<h1>Регистрация</h1>
			<div class="input-box">
				<input type="text" name="login" placeholder="Введите логин">
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="email" name="email" placeholder="Введите почту">
				<i class='bx bx-envelope' ></i>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Придумайте пароль">
				<i class='bx bxs-lock-alt' ></i>
			</div>
			<div class="input-box">
				<input type="password" name="confirm_password" placeholder="Подтвердите пароль">
				<i class='bx bxs-lock-alt' ></i>
			</div>

			<button type="submit" class="btn">Зарегистрироваться</button>

			<div class="register-link">
				<p>Уже есть аккаунт? <a href="/login.php">Войти</a></p>
				<?php 
					if ($_SESSION['messageErr'] ?? false):
				?>
					<span class="msgErr">
						<?=
							$_SESSION['messageErr'] ?? false;
							unset($_SESSION['messageErr']);
						?>
					</span>
				<?php endif?>
			</div>

			<div class="home-link">
				<a href="/">Главная</a>
			</div>
		</form>
	</div>
</body>
</html>