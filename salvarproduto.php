<?php
session_start();
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	include('conecta.php');
	include('executa.php');

	$produto = mysqli_real_escape_string($conn,$_GET['produto']);
	$descricao = mysqli_real_escape_string($conn,$_GET['descricao']);
	$quantidade = mysqli_real_escape_string($conn,$_GET['quantidade']);
	$vista = mysqli_real_escape_string($conn,$_GET['vista']);
	$prazo = mysqli_real_escape_string($conn,$_GET['prazo']);

	$query = " INSERT INTO mercadorias(produto, descricao, quantidade, vista, prazo) VALUES ('{$produto}','{$descricao}',{$quantidade},{$vista},{$prazo})";

	$result = executaQuery($conn,$query);

	if($result){
		echo "sucess_save";
		header('Location: mercadorias.php');
		exit;
	}

	mysqli_close($conn);
}
else{
	header('Location: index.php');
	exit;
}
