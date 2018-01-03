<?php
	function executaQuery($conexao,$query){

		$result = mysqli_query($conexao,$query);

		if(!$result){
			echo mysqli_error($conn);
		}

		return $result;
	}