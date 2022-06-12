<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		include "db_connect.php";

		$nome_user = $_POST['nome_user'];
		$dn_user = $_POST['dn_user'];
		$cpf_user = $_POST['cpf_user'];
		$telefone_user = $_POST['telefone_user'];
		$email_user = $_POST['email_user'];
		$senha_user = $_POST['senha_user'];

		$insert_user = "INSERT INTO mm_usuarios (nome_user, dn_user, cpf_user, telefone_user, email_user, senha_user) VALUES ('$nome_user','$dn_user','$cpf_user','$telefone_user','$email_user','$senha_user')";

		if (mysqli_query($connect, $insert_user)) { 
			echo "$nome_user cadastrado com sucesso!";
		}else{
			echo "Erro ao casdastrar $nome_user, tente novamente!";
		}
	?>
</body>
</html>