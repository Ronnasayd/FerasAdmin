<?php
	$conn = mysqli_connect("localhost","root","","Feras");
	$query = "SELECT * FROM mercadorias";
	$result = mysqli_query($conn,$query);

	while($row = mysqli_fetch_assoc($result)){
				echo "<tr>
                    <th>".$row['produto']."</th>
                    <th>".$row['descricao']."</th>
                    <th>".$row['quantidade']."</th>
                    <th>".$row['vista']."</th>
                    <th>".$row['prazo']."</th></tr>";
	}
	mysqli_close($conn);
?>