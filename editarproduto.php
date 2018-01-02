<?php
$conn = mysqli_connect("localhost","root","","Feras");
	$query = "UPDATE mercadorias SET produto='{$_GET['produto']}',descricao='{$_GET['descricao']}',quantidade={$_GET['quantidade']},vista={$_GET['vista']},prazo={$_GET['prazo']} WHERE id={$_GET['id']}";
	$result = mysqli_query($conn,$query);

	if(!$result){
		echo mysqli_error($conn);
}

	mysqli_close($conn);

?>