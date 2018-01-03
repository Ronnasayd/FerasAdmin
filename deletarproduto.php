<?php
	$conn = mysqli_connect("localhost","root","","Feras");
	$query = "DELETE FROM mercadorias WHERE id={$_GET['id']}";
	$result = mysqli_query($conn,$query);

if(!$result){
		echo mysqli_error($conn);
}

	mysqli_close($conn);
?>