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
            <h5 class="modal-title" id="exampleModalLabel">Pronto para sair?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
            </button>
         </div>
         <div class="modal-body">Selecione "Sair" abaixo se você deseja encerrar essa sessão.</div>
         <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <a class="btn btn-primary" href="index.php">Sair</a>
         </div>
      </div>
   </div>
</div>
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
         <button  class="btn btn-primary" type="button" onclick="cadastrarelistar()" data-dismiss="modal">Salvar</button>
         </div>
         </form>
      </div>
   </div>
</div>
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
         <button type="button" class="btn btn-primary" onclick="editarProduto()" data-dismiss="modal">Salvar</button>
         </div>
         </form>
      </div>
   </div>
</div>
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
