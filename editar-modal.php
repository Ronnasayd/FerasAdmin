<?php
?>
<!-- Editar produto -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalEditar" >
   <div class="modal-dialog modal-lg feras-modal-cadastrar" role="document">
      <div class="modal-content">
         <div class="feras-modal-header-bg-color modal-header">
            <h5 class="modal-title">Editar Produto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form>
               <input type="hidden" name="id" id="feras-editar-id" value="">
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputEmail4">Produto</label>
                     <input type="text" class="form-control" id="feras-editar-produto" placeholder="Ex: Nome da Ração">
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputPassword4">Descrição</label>
                     <input type="text" class="form-control" id="feras-editar-descricao" placeholder="Ex: Filhote/Adulto">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-2">
                     <label for="inputEmail4">Quantidade</label>
                     <input type="number" class="form-control" id="feras-editar-quantidade" placeholder="0 Kg/Und">
                  </div>
                  <div class="form-group col-md-5">
                     <label for="inputPassword4">Valor à Vista</label>
                     <input type="number" step="0.001" class="form-control" id="feras-editar-vista" placeholder="$ 00,00">
                  </div>
                  <div class="form-group col-md-5">
                     <label for="inputPassword4">Valor à Prazo</label>
                     <input type="number" step="0.001" class="form-control" id="feras-editar-prazo" placeholder="$ 00,00">
                  </div>
               </div>
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
         <button type="submit" class="btn btn-primary" onclick="editarProduto()" data-dismiss="modal">Salvar</button>
         </div>
         </form>
      </div>
   </div>
</div>
<?php
?>