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

       

                        <a class="btn btn-danger" data-toggle='modal' data-target='#modalExcluir' onclick="changehideninputid(<?php echo $row['id']?>)" href="">
                        <i class='fa fa-fw fa-close'></i>
                        </a>


                        <a  class="btn btn-primary" data-toggle='modal' data-target='#modalEditar' href="" onclick="passToEdit('<?php echo $row['produto']?>','<?php echo $row['descricao']?>',<?php echo $row['quantidade']?>,<?php echo $row['vista']?>,<?php echo $row['prazo']?>,<?php echo $row['id']?>)">
                        <i class='fa fa-fw fa-edit'></i>
                        </a>


                      </div>
                    </th>
                  </tr>

  
<?php
	}
	mysqli_close($conn);
?>

