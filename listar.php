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
                        <button type='button' class='btn btn-danger' onclick="changehideninputid(<?php echo $row['id']?>)">
                        <i class='fa fa-fw fa-close'></i>
                        </button></a>


                        <a  data-toggle='modal' data-target='#modalEditar'>
                        <button type='button' class='btn btn-primary' onclick="passToEdit('<?php echo $row['produto']?>','<?php echo $row['descricao']?>',<?php echo $row['quantidade']?>,<?php echo $row['vista']?>,<?php echo $row['prazo']?>,<?php echo $row['id']?>)">
                        <i class='fa fa-fw fa-edit'></i>
                        </button></a>
                      </div>
                    </th>
                  </tr>

  
<?php
	}
	mysqli_close($conn);
?>