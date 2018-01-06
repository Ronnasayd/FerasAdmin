<?php
?>
<!-- confirmar exclusao -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="feras-modal-header-bg-color modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Confirme a ação !</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Você tem certeza que deseja excluir esse produto ?</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Não</button>
            <form>
               <input type="hidden" name="id" id="feras-input-deletar" value="">
               <button class="btn btn-primary" type="button" onclick="deletarproduto()" data-dismiss="modal">Sim</button>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
?>