<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	  include ("/eventos_mm/purchase_done/done/index.php");
		include "db_connect.php";

		$nome_compra = $_POST['nome_compra'];
		$cpf_compra = $_POST['cpf_compra'];
		$produto_compra = $_POST['produto_compra'];
		$quantidade_compra = $_POST['quantidade_compra'];
		$endereco_compra = $_POST['endereco_compra'];
		$fdp_compra = $_POST['fdp_compra'];


		$insert_prod = "INSERT INTO mm_compras (nome_compra, cpf_compra, produto_compra, quantidade_compra, endereco_compra, fdp_compra) VALUES ('$nome_compra','$cpf_compra','$produto_compra', '$quantidade_compra', '$endereco_compra', '$fdp_compra')";

		if (mysqli_query($connect,$insert_prod)) { 
			header('Location: /eventos_mm/purchase_done/done/index.php');
		}else{
			echo "Erro ao casdastrar $nome_compra, tente novamente!";
		}
	?>
</body>
</html>