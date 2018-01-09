<?php
if(!isset($_SESSION)){
         session_start();
}
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	require_once('conecta.php');
	require_once('executa.php');

	$produto = mysqli_real_escape_string($conn,$_GET['produto']);
	$descricao = mysqli_real_escape_string($conn,$_GET['descricao']);
	$quantidade = mysqli_real_escape_string($conn,$_GET['quantidade']);
	$vista = mysqli_real_escape_string($conn,$_GET['vista']);
	$prazo = mysqli_real_escape_string($conn,$_GET['prazo']);

	$query = " INSERT INTO mercadorias(produto, descricao, quantidade, vista, prazo) VALUES ('{$produto}','{$descricao}',{$quantidade},{$vista},{$prazo})";

	$result = executaQuery($conn,$query);

	if($result){
		echo "success_save";
	}
	else{
		echo mysqli_error($conn);
	}

}	
else{
	header('Location: index.php');
	exit;
}

mysqli_close($conn);
