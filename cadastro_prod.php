<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Usuários</title>
</head>
<body>
	<form method="POST" action="php_action/insert_prod.php">
		<fieldset>
			<legend>Casdatro de Produtos</legend>
			<div>
				<label>Nome</label>
				<input type="text" name="nome_prod">
			</div>
			<div>
				<label>Preço</label>
				<input type="text" name="preco_prod">
			</div>
			<div>
				<label>Quantidade</label>
				<input type="text" name="quant_prod">
			</div>
			<input type="submit" name="enviar">
		</fieldset>
	</form>
</body>
</html>