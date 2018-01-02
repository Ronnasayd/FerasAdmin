<?php
	$conn = mysqli_connect("localhost","root","","Feras");
	$query = " INSERT INTO mercadorias(produto, descricao, quantidade, vista, prazo) VALUES ('{$_GET['produto']}','{$_GET['descricao']}',{$_GET['quantidade']},{$_GET['vista']},{$_GET['prazo']})";
	$result = mysqli_query($conn,$query);
	if($result){
		echo "sucess_save";
		header('Location: mercadorias.php');
		exit;
	}
	else{
		echo("Error description: " . mysqli_error($conn));
		exit;
	}

	mysqli_close($conn);

?>