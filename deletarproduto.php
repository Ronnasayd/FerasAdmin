<?php
	include('conecta.php');
	include('executa.php');
	
	$id = mysqli_real_escape_string($conn,$_GET['id']);
	
	$query = "DELETE FROM mercadorias WHERE id={$id}";
	$result = executaQuery($conn,$query);

	mysqli_close($conn);
