<?php
session_start();
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	include('header.php');
	include('listar.php');
	include('footer.php');
}
else{
	include('header.php');
?>
<div class="alert alert-danger">
  <strong>Perigo!</strong> Você não tem autorização para acessar essa área.
</div>

<?php
	include('listar_not_admin.php');
	include('footer.php');
}
?>
              
