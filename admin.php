<?php
if(!isset($_SESSION)){
         session_start();
}
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	require_once('header.php');
	require_once('listar.php');
	require_once('footer.php');
}
else{
	require_once('header.php');
?>
<div class="alert alert-danger">
  <strong>Perigo!</strong> Você não tem autorização para acessar essa área.
</div>

<?php
	require_once('listar_not_admin.php');
	require_once('footer.php');
}
?>
              
