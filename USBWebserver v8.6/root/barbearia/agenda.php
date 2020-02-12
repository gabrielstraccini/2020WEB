<?php

include("funcoes.php");

?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset='utf-8' />
		<title>Barbearia IFSP 2020</title>
		<style>
			input{margin:2px;}
		</style>
	</head>	
	<body>
		<a href="form_agenda.php">Cadastrar Novo Agendamento</a>
		<hr />
		<h1>Agendamento Barbearia IFSP 2020</h1>
		<?php
			exibe_tabela_xml("agendamentos.xml");
		?>
	</body>
</html>
	