<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Criar Usuário</title>
</head>
<body>
	<form action="{{ route('user.store') }}" method="POST">
		@csrf
		<label>Nome do usuário:</label>
		<input type="text" name="name">

		<label>E-mail do usuário:</label>
		<input type="text" name="email">

		<label>Senha do usuário:</label>
		<input type="password" name="password">
		
		<input type="submit" value="Cadastrar Usuário">
	</form>
</body>
</html>