<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "db_connect.php";

		$nome_prod = $_POST['nome_prod'];
		$preco_prod = $_POST['preco_prod'];
		$quant_prod = $_POST['quant_prod'];

		$insert_prod = "INSERT INTO dados_prod (nome_prod, preco_prod, quant_prod) VALUES ('$nome_prod','$preco_prod','$quant_prod')";

		if (mysqli_query($connect,$insert_prod)) { 
			echo "$nome_prod cadastrado com sucesso!";
		}else{
			echo "Erro ao casdastrar $nome_prod, tente novamente!";
		}
	?>
</body>
</html>