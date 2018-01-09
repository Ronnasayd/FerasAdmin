<?php
	function executaQuery($conexao,$query){

		$result = mysqli_query($conexao,$query);

		if(!$result){
			echo mysqli_error($conexao);
		}

		return $result;
	}