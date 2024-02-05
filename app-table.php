<?php 
session_start();

if (!$_SESSION['user']['role'] ?? false) {
	header('Location: /');
}

require_once 'vendor/connectDB.php';

$result = mysqli_query($connect, "SELECT * FROM `form`");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="img/favicon.ico" type="image/x-icon">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="css/main.css">
	<title>GTA VI</title>
</head>
<body>
	<div class="container">
		<div class="d-flex position-relative align-items-center">
			<h2 class="mt-4 mb-4 cl">Список заявок</h2>
			<?php require "blocks/icon.php" ?>
		</div>
		<table class="table table-bordered table-dark">
			<thead>
				<tr>
					<th scope="col">ID</th>
					<th scope="col">Имя</th>
					<th scope="col">Номер телефона</th>
					<th scope="col">Почта</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					while($list = mysqli_fetch_assoc($result)) {
						?>
							<tr>
								<th scope="row"><?php echo $list['id'] ?></th>
								<td><?php echo $list['name'] ?></td>
								<td><?php echo $list['phone'] ?></td>
								<td>@<?php echo $list['email'] ?></td>
							</tr>
						<?php
					}
				?>
				
			</tbody>
		</table>
	</div>
</body>
</html>