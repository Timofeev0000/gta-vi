<?php

$connect = mysqli_connect('localhost', 'root', 'root', 'gta-vi');

if (!$connect) {
	die('Ошибка подключения к бд!');
}