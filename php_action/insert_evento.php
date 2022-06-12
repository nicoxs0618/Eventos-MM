<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "db_connect.php";

		$nome_evento = $_POST['nome_evento'];
		$curso_evento = $_POST['curso_evento'];
		$duracao_evento = $_POST['duracao_evento'];
		$data_evento = $_POST['data_evento'];

		$insert_evento = "INSERT INTO dados_evento (nome_evento, curso_evento, duracao_evento, data_evento) VALUES ('$nome_evento','$curso_evento','$duracao_evento','$data_evento')";

		if (mysqli_query($connect,$insert_evento)) { 
			echo "$nome_evento cadastrado com sucesso!";
		}else{
			echo "Erro ao casdastrar $nome_evento, tente novamente!";
		}
	?>
</body>
</html>