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


	$bproduto = mysqli_real_escape_string($conn,$_GET['bproduto']);
	$bdescricao = mysqli_real_escape_string($conn,$_GET['bdescricao']);
	$bquantidade = mysqli_real_escape_string($conn,$_GET['bquantidade']);
	$bvista = mysqli_real_escape_string($conn,$_GET['bvista']);
	$bprazo = mysqli_real_escape_string($conn,$_GET['bprazo']);


	$query = "UPDATE mercadorias SET produto='{$produto}',descricao='{$descricao}',quantidade={$quantidade},vista={$vista},prazo={$prazo} WHERE produto='{$bproduto}' AND descricao='{$bdescricao}' AND quantidade={$bquantidade} AND FORMAT(vista,3)=FORMAT({$bvista},3) AND FORMAT(prazo,3)=FORMAT({$bprazo},3)";

	// echo var_dump($query);
	
	$result = executaQuery($conn,$query);

	if($result){
		echo "success_edit";
	}

	mysqli_close($conn);

}
else{
	header('Location: index.php');
	exit;
}

