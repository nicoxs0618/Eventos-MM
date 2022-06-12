<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include ("/eventos_mm/index.php");
		include "db_connect.php";

		$nome_compra = $_POST['nome_compra'];
		$cpf_compra = $_POST['cpf_compra'];
		$produto_compra = $_POST['produto_compra'];
		$quantidade_compra = $_POST['quantidade_compra'];
		$endereco_compra = $_POST['endereco_compra'];
		$fde_compra = $_POST['fde_compra'];


		$insert_prod = "INSERT INTO mm_compras (nome_compra, cpf_compra, produto_compra, quantidade_compra, endereco_compra, fde_compra) VALUES ('$nome_compra','$cpf_compra','$produto_compra', '$quantidade_compra', '$endereco_compra', '$fde_compra')";

		if (mysqli_query($connect,$insert_prod)) { 
			echo "$nome_compra cadastrado com sucesso!";
		}else{
			echo "Erro ao casdastrar $nome_compra, tente novamente!";
		}
	?>
</body>
</html>