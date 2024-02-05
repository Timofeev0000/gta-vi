<?php session_start();?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="css/main.css">
	<title>GTA VI</title>
</head>
<body>
	<div class="container">
		<header>
			<?php 
				if ($_SESSION['user'] ?? false):
			?>
				<div class="logout">
					<div class="">
						<div class="user-name">
							<?= $_SESSION['user']['login'] ?? false; ?>
						</div>
						<?php 
							if ($_SESSION['user']['role'] ?? false):
						?>
							<a href="app-table.php" class="list-form"> Список заявок </a>
						<?php endif?>
					</div>
					<a href="vendor/logout.php" class="btn"> Выйти </a>
				</div>
			<?php 
				else:
			?>
				<div class="sign-block">
					<a href="/login.php" class="ml-5 btn">
						Авторизация
					</a>
				</div>
			<?php endif; ?>
		</header>
		<div class="form-block">
			<form action="vendor/send-form.php" method="post">
				<h1>Gta 6 - Оставь заявку</h1>
				<input type="name" name="user_name" placeholder="Введите имя:">
				<input type="number" name="phone_number" placeholder="Введите номер телефона:">
				<input type="email" name="email" placeholder="Введите email:">
				<?php 
					if($_SESSION['messageFormErr'] ?? false):
				?>
					<p class="msgErr">
						<?=
							$_SESSION['messageFormErr'] ?? false;
							unset($_SESSION['messageFormErr']);
						?>
					</p>
				<?php 
					elseif($_SESSION['messageFormDone'] ?? false):
				?>
					<p class="message-form-done">
						<?=
							$_SESSION['messageFormDone'] ?? false;
							unset($_SESSION['messageFormDone']);
						?>
					</p>
				<?php endif?>
				<button type="submit">Получить GTA</button>
			</form>
		</div>
	</div>
</body>
</html>