<!DOCTYPE html>
<html>
<head>
	<title>Cadastro de Eventos</title>
</head>
<body>
	<form method="POST" action="php_action/insert_evento.php">
		<fieldset>
			<legend>Casdatro de Produtos</legend>
			<div>
				<label>Nome</label>
				<input type="text" name="nome_evento">
				<label>Curso</label>
				<input type="text" name="curso_evento">
			</div>
			<div>
				<label>Duração</label>
				<input type="text" name="duracao_evento">
				<label>Data</label>
				<input type="date" name="data_evento">
			</div>
			<input type="submit" name="enviar">
		</fieldset>
	</form>
</body>
</html>