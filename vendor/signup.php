<?php

session_start();
require_once 'connectDB.php';

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];

if ($password == $confirm_password) {
	$password = md5($password);
	mysqli_query($connect, "INSERT INTO `users` (`id`, `login`, `email`, `password`, `role`) VALUES (NULL, '$login', '$email', '$password', '')");
	$_SESSION['messageRegister'] = 'Регистрация прошла успешно!';
	header('Location: ../login.php');
} else {
	$_SESSION['messageErr'] = 'Пароли не совпадают!';
	header('Location: ../register.php');
}
