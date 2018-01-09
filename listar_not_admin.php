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
                    <td>".$row['prazo']."</td></tr>";
	}
	mysqli_close($conn);
?>