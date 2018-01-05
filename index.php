<?php
session_start();
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	header('Location: mercadorias.php');
	exit;
}
?>

<?php
require_once('header_not_admin.php');
?>

<?php
require_once('listar_not_admin.php');
?>
                 
<?php
require_once('footer_not_admin.php');
?>