<?php

session_start();
require_once 'connectDB.php';

$user_name = $_POST['user_name'];
$phone_number = $_POST['phone_number'];
$email = $_POST['email'];

if (strlen($user_name) > 3 && strlen($phone_number) > 10 && strlen($email) > 8) {
	mysqli_query($connect, "INSERT INTO `form` (`id`, `name`, `phone`, `email`) VALUES (NULL, '$user_name', '$phone_number', '$email')");
	$_SESSION['messageFormDone'] = 'Заявка была успешно отправлена!';
	header('Location: /');
} else {
	$_SESSION['messageFormErr'] = 'Убедитесь в правильности введения данных!';
	header('Location: /');
}


