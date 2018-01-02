<?php

$conn = mysqli_connect("localhost","root","","Feras");
if(!$conn){
	exit;
}

$sql = "SELECT id FROM usuarios WHERE usuario='{$_POST['usuario']}' AND senha='{$_POST['senha']}'";

$result = mysqli_query($conn,$sql);

if(!$result){
	exit;
}

$row = mysqli_fetch_row($result);

if($row[0]){
			header('Location: mercadorias.php');
			exit;
}
else{
			header("Location: index.php?errorMsg='Invalid'");
}
mysqli_close($conn);
?>