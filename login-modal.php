<?php
?>
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
      <form id="feras-form-login" method="POST"> 
          <div class="form-group">
            <label for="exampleInputEmail1">Usuário</label>
            <input class="form-control" id="feras-validate-login-usuario" type="text"  placeholder="Entre com nome de Usuário" name="usuario">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input class="form-control" id="feras-validate-login-senha" type="Password" placeholder="senha" name="senha">
          </div>
    
          <button class="btn btn-primary btn-block" id="feras-button-validate-id" type="button">Entrar</button>
        </form>
         </div>
         <div class="modal-footer">


  <div class=" feras-alert-login alert alert-info text-center" id="feras-alert-login-id"><strong>Info!</strong> Usuário ou senha incorreta(s).</div>

         </div>
      </div>
   </div>
</div>
<?php
?>
