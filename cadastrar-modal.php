<?php
?>
<!-- modal cadastrar -->
<div class="modal fade" tabindex="-1" role="dialog" id="modalCadastrar" >
   <div class="modal-dialog modal-lg feras-modal-cadastrar" role="document">
      <div class="modal-content">
         <div class="feras-modal-header-bg-color modal-header">
            <h5 class="modal-title">Cadastrar Novo Produto</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <form>
               <div class="form-row">
                  <div class="form-group col-md-6">
                     <label for="inputEmail4">Produto</label>
                     <input type="text" name="produto" class="form-control" id="feras-cadastro-produto" placeholder="Ex: Nome da Ração">
                  </div>
                  <div class="form-group col-md-6">
                     <label for="inputPassword4">Descrição</label>
                     <input type="text" name="descricao" class="form-control" id="feras-cadastro-descricao" placeholder="Ex: Filhote/Adulto">
                  </div>
               </div>
               <div class="form-row">
                  <div class="form-group col-md-2">
                     <label for="inputEmail4">Quantidade</label>
                     <input type="number" name="quantidade" class="form-control" id="feras-cadastro-quantidade" placeholder="0 Kg/Und">
                  </div>
                  <div class="form-group col-md-5">
                     <label for="inputPassword4">Valor à Vista</label>
                     <input type="number" step="0.001" name="vista" class="form-control" id="feras-cadastro-vista" placeholder="$ 00,00">
                  </div>
                  <div class="form-group col-md-5">
                     <label for="inputPassword4">Valor à Prazo</label>
                     <input type="number" step="0.001" name="prazo" class="form-control" id="feras-cadastro-prazo" placeholder="$ 00,00">
                  </div>
               </div>
               <!-- </form> -->
         </div>
         <div class="modal-footer">
         <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
         <button  class="btn btn-primary" type="submit" onclick="cadastrarelistar()" data-dismiss="modal">Salvar</button>
         </div>
         </form>
      </div>
   </div>
</div>
<?php
?>