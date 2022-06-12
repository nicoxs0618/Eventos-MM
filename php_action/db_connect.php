<?php
	$server = "localhost";
	$user = "root";
	$password = "";
	$bd = "mm_eventos";

	if ($connect = mysqli_connect($server,$user,$password,$bd)) {
		//echo "Conectado";
	} else {
		echo "Erro!";
	}
?>