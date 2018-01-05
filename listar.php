<?php
	require_once('conecta.php');
  require_once('executa.php');

	$query = "SELECT * FROM mercadorias";
	$result = executaQuery($conn,$query);

	while($row = mysqli_fetch_assoc($result)){
				echo "<tr>
                    <th>".$row['produto']."</th>
                    <th>".$row['descricao']."</th>
                    <th>".$row['quantidade']."</th>
                    <th>".$row['vista']."</th>
                    <th>".$row['prazo']."</th>";
   ?>
                    <th class='text-center'>
                      <div>
                        <a data-toggle='modal' data-target='#modalExcluir'>
                        <button type='button' class='btn btn-danger' id=<?php echo $row['id']?> onclick="changehideninputid(this.id)">
                        <i class='fa fa-fw fa-close'></i>
                        </button></a>


                        <a  data-toggle='modal' data-target='#modalEditar'>
                        <button type='button' class='btn btn-primary' onclick="
                        function abc(){
                          document.getElementById('feras-editar-produto').value='<?php echo $row['produto']?>';
                          document.getElementById('feras-editar-descricao').value='<?php echo $row['descricao']?>';
                          document.getElementById('feras-editar-quantidade').value='<?php echo $row['quantidade']?>';
                          document.getElementById('feras-editar-vista').value='<?php echo $row['vista']?>';
                          document.getElementById('feras-editar-prazo').value='<?php echo $row['prazo']?>';
                          document.getElementById('feras-editar-id').value='<?php echo $row['id']?>';
                        }; abc();">
                        <i class='fa fa-fw fa-edit'></i>
                        </button></a>
                      </div>
                    </th>
                  </tr>

  
<?php
	}
	mysqli_close($conn);
?>