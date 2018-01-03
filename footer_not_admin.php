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
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="feras-modal-header-bg-color modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Faça login para entrar na área de administração</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">
      <form id="feras-form-login" method="POST" action="validateLogin.php"> 
          <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input class="form-control" id="feras-validate-login-usuario" type="text"  placeholder="Entre com nome de Usuário" name="usuario">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="feras-validate-login-senha" type="Password" placeholder="senha" name="senha">
          </div>
         <!--  <div class="form-group">
            <div class="form-check">
              <label class="form-check-label">
                <input class="form-check-input" type="checkbox" name="lembrar"> Lembrar Senha</label>
            </div>
          </div> -->
          <button class="btn btn-primary btn-block" id="feras-button-validate-id" type="button" onclick="validateLogin()">Entrar</button>
        </form>
         </div>
         <div class="modal-footer">
  <!--           <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="#">Entrar</a> -->

  <div class=" feras-alert-login alert alert-info text-center" id="feras-alert-login-id"><strong>Info!</strong> Usuário ou senha incorreta(s).</div>

         </div>
      </div>
   </div>
</div>


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
<script src="js/sb-admin-datatables.min.js"></script>

</div>
</body>
</html>
