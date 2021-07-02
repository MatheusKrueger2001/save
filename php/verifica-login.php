<?php

/* 03/03/2021 */

include('conexao.php');

if (empty($_POST['login']) || empty($_POST['password'])) {
	header('Location: http://192.168.1.6/web/login.html');
	exit();
}

$usuario = mysqli_real_escape_string($conexao, $_POST['login']);
$password = mysqli_real_escape_string($conexão, $_POST['password']);

echo $usuario;
echo $senha;
?>