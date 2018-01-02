<?php
include('header.php');
?>
<div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Produto</th>
                    <th>Descrição</th>
                    <th>Quantidade</th>
                    <th>Valor à Vista</th>
                    <th>Valor à Prazo</th>
                    <th>Opções</th>
                  </tr>
                </thead>
                <!-- <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                  </tfoot> -->
                <tbody id="tabela-feras-body">
                 <!--  <tr>
                    <th>Pedigree</th>
                    <th>Filhote</th>
                    <th>25</th>
                    <th>120,00</th>
                    <th>130,00</th>
                    <th class="text-center">
                      <div>
                        <a  data-toggle="modal" data-target="#confirmaExclusao">
                        <button type="button" class="btn btn-danger">
                        <i class="fa fa-fw fa-close"></i>
                        </button></a>
                        <a  data-toggle="modal" data-target="#modalEditar">
                        <button type="button" class="btn btn-primary">
                        <i class="fa fa-fw fa-edit"></i>
                        </button></a>
                      </div>
                    </th>
                  </tr> -->
                  <?php
                    include('listar.php');
                  ?> 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>
      </div>
<?php
include('footer.php');
?>