<?php
session_start();
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	
	include('conecta.php');
	include('executa.php');
	
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	
	$query = "DELETE FROM mercadorias WHERE id={$id}";
	$result = executaQuery($conn,$query);

	mysqli_close($conn);
}
else{
	header('Location: index.php');
	exit;
}