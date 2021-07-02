<?php
/* 03/03/2021 */

define('HOST', '127.0.0.1');
define('USER', 'root');
define('PASSWORD', '102030');
define('DB', 'login');

$conexao = mysqli_connect(HOST, USER, PASSWORD, DB) or die('Não foi possivel conectar');
