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
		<a href="agenda.php">Agenda</a>
		<hr />
		<h1>Agendamento Barbearia IFSP 2020</h1>
		<form method="post" action="recebe_agenda.php">			
			<input type="text" name="nome" placeholder="Nome..." />
			<br />
			<input type="email" name="email" placeholder="Email..." />
			<br />
			<input type="text" name="telefone" placeholder="Telefone..." />
			<br />
			<label>Data:</label>
			<input type="date" name="data" />
			<br />
			<input name="hora" type="time" min="07:00" max="17:45" placeholder="Hora" />
			
			<br />
			<input type="submit" value="Agendar" />		
		</form>
	</body>
</html>
	