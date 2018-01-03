<?php
include('conecta.php');
include('executa.php');

	$produto = mysqli_real_escape_string($conn,$_GET['produto']);
	$descricao = mysqli_real_escape_string($conn,$_GET['descricao']);
	$quantidade = mysqli_real_escape_string($conn,$_GET['quantidade']);
	$vista = mysqli_real_escape_string($conn,$_GET['vista']);
	$prazo = mysqli_real_escape_string($conn,$_GET['prazo']);
	$id = mysqli_real_escape_string($conn,$_GET['id']);

	$query = "UPDATE mercadorias SET produto='{$produto}',descricao='{$descricao}',quantidade={$quantidade},vista={$vista},prazo={$prazo} WHERE id={$id}";
	
	$result = executaQuery($conn,$query);

	mysqli_close($conn);

