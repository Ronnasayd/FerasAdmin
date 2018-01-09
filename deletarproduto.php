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
	
	$query = "DELETE FROM mercadorias WHERE produto='{$produto}' AND descricao='{$descricao}' AND quantidade={$quantidade} AND FORMAT(vista,3)=FORMAT({$vista},3) AND FORMAT(prazo,3)=FORMAT({$prazo},3)";
	$result = executaQuery($conn,$query);

	if($result){
		echo "success_delete";
	}
	else{
		echo mysqli_error($conn);
	}

	mysqli_close($conn);
}
else{
	header('Location: index.php');
	exit;
}

