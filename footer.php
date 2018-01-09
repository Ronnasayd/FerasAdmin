</tbody>
</table>
</div>
</div>
<div class="card-footer small text-muted" id="feras-atualizacao-data">
   <script type="text/javascript">
      document.getElementById("feras-atualizacao-data").innerHTML = "Atualizado em " + new Date().toLocaleString();
   </script>
</div>
</div>
</div>
<!-- /.container-fluid-->
<!-- /.content-wrapper-->
<footer class="sticky-footer">
   <div class="container">
      <div class="text-center">
         <small>Copyright © Feras PetShop 2017</small>
      </div>
   </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
<i class="fa fa-angle-up"></i>
</a>

<?php
if(!isset($_SESSION)){
         session_start();
}

if(isset($_SESSION['admin']) or !empty($_SESSION['admin'])){
require_once('logout-modal.php');
require_once('cadastrar-modal.php');
require_once('editar-modal.php');
require_once('confirma-exclusao-modal.php');
}
else{
	require_once('login-modal.php');
}
?>


<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/sb-admin.min.js"></script>
<!-- Custom scripts for this page-->
<script src="js/jquery-feras.js"></script>

<!-- <script type="text/javascript" src="js/ajax.js"></script> -->
</div>
</body>
</html>
