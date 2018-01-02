<?php
	$conn = mysqli_connect("localhost","root","","Feras");
	$query = "DELETE FROM mercadorias WHERE id={$_GET['id']}";
	$result = mysqli_query($conn,$query);

if(!$result){
		echo mysqli_error($conn);
}

	// if($result){
	// 	header('Location: mercadorias.php');
	// 	exit;

	// }
	// else{
	// 	header('Location: mercadorias.php');
	// 	exit;
	// }
	mysqli_close($conn);
?>