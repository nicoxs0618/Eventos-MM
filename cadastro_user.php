<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de usuário</title>]
	    <link href="css/font-awesome.css" rel="stylesheet" type="text/css"/>
    <!-- owl carousel css-->
    <link rel="stylesheet" href="owl-carousel/assets/owl.carousel.min.css" type="text/css"/>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <!-- custom CSS -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
	<form method="POST" action="register/login/php_action/insert_user.php">
		<fieldset style="display: grid; ">
			<legend>Cadastro</legend>
			<div>
				<label>Nome</label>
				<input type="text" name="nome_user">
				<label>Data de nascimento</label>
				<input type="date" name="dn_user">
			</div>
			<div>
				<label>CPF</label>
				<input type="text" name="cpf_user">
				<label>Telefone</label>
				<input type="text" name="telefone_user">
			</div>
			<div>
				<label>E-mail</label>
				<input type="email" name="email_user">
				<label>Senha</label>
				<input type="password" name="senha_user">
			</div>
			<input type="submit" name="enviar">
		</fieldset>
	</form>
</body>
</html>