<?php
if(!isset($_SESSION)){
         session_start();
}
if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
	header('Location: admin.php');
	exit;
}

require_once('header.php');
require_once('listar_not_admin.php');
require_once('footer.php');



