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
	<title>Авторизация</title>
</head>
<body>
	<div class="wrapper">
		<form action="vendor/signin.php" method="post">
			<h1>Авторизация</h1>
			<div class="input-box">
				<input type="text" name="login" placeholder="Введите логин">
				<i class='bx bxs-user'></i>
			</div>
			<div class="input-box">
				<input type="password" name="password" placeholder="Введите пароль">
				<i class='bx bxs-lock-alt' ></i>
			</div>

			<div class="remember-forgot">
				<label>
					<input type="checkbox">Запомнить меня
				</label>
				<a href="#">Забыли пароль?</a>
			</div>

			<button type="submit" class="btn">Войти</button>

			<div class="register-link">
				<p>У вас нет аккаунта? <a href="/register.php">Зарегистрировать</a></p>
				<?php 
					if ($_SESSION['messageRegister'] ?? false):
				?>
					<span class="msgSuccess">
						<?=
							$_SESSION['messageRegister'] ?? false;
							unset($_SESSION['messageRegister']);
						?>
					</span>
				<?php 
					elseif($_SESSION['messageLoginErr'] ?? false):
				?>
					<span class="msgErr">
						<?=
							$_SESSION['messageLoginErr'] ?? false;
							unset($_SESSION['messageLoginErr']);
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