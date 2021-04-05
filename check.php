<?php 
	$login = filter_var(trim($_POST['login']),
	FILTER_SANITIZE_STRING);

	$name = filter_var(trim($_POST['name']),
	FILTER_SANITIZE_STRING);

	$pass = filter_var(trim($_POST['pass']),
	FILTER_SANITIZE_STRING);


	$pass = md5($pass."kdawkd5235s");

	$mysql = new mysqli('localhost', 'root', '', 'register');

	$mysql->query("INSERT INTO `users` (`login`, `pass`, `name`) 
	VALUES('$login', '$pass', '$name')");

	$mysql->close();

	header('Location: http://localhost/layout1');
?>
