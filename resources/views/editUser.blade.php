<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Editar Usuário</title>
</head>
<body>
	<form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
		@csrf
		@method('PUT')
		<label>Nome do usuário:</label>
		<input type="text" name="name" value="{{ $user->name }}">

		<label>E-mail do usuário:</label>
		<input type="text" name="email"value="{{ $user->email }}">

		<label>Senha do usuário:</label>
		<input type="password" name="password">
		
		<input type="submit" value="Editar Usuário">
	</form>
</body>
</html>