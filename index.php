<?php
session_start();
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	header('Location: mercadorias.php');
	exit;
}
?>

<?php
include('header_not_admin.php');
?>

<?php
include('listar_not_admin.php');
?>
                 
<?php
include('footer_not_admin.php');
?>