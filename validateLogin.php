<?php

require_once('conecta.php');
require_once('executa.php');

$senha = mysqli_real_escape_string($conn,md5($_POST['senha']));
$usuario = mysqli_real_escape_string($conn,$_POST['usuario']);

$sql = "SELECT id FROM usuarios WHERE usuario='$usuario' AND senha='$senha'";

$result = executaQuery($conn,$sql);


$row = mysqli_fetch_row($result);


if($row[0]){

			session_start();
			$_SESSION['admin']="administrador_logado";
		

			header('Location: admin.php');
			exit;
}
else{
			echo mysqli_error($conn);
			
}
mysqli_close($conn);
