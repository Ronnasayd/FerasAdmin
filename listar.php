<?php
	require_once('conecta.php');
  require_once('executa.php');

	$query = "SELECT * FROM mercadorias";
	$result = executaQuery($conn,$query);

	while($row = mysqli_fetch_assoc($result)){
				echo "<tr>
                    <td>".$row['produto']."</td>
                    <td>".$row['descricao']."</td>
                    <td>".$row['quantidade']."</td>
                    <td>".$row['vista']."</td>
                    <td>".$row['prazo']."</td>";
   ?>
                    <td class='text-center'>
                      <div>

       

                        <a class="btn btn-danger button-delete" data-toggle='modal' data-target='#modalExcluir' href="">
                        <i class='fa fa-fw fa-close'></i>
                        </a>


                        <a  class="btn btn-primary button-edit" data-toggle='modal' data-target='#modalEditar' href="">
                        <i class='fa fa-fw fa-edit'></i>
                        </a>


                      </div>
                    </td>
                  </tr>

  
<?php
	}
	mysqli_close($conn);
?>

