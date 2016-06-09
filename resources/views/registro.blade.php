<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrar</title>
</head>
<body>
	<form action="{{ url('/') }}" method="POST">
		<input type="text" name="id_usuario" id="id_usuario">
		<input type="text" name="nombre_usuario" id="nombre_usuario">
		<input type="text" name="apellidos_usuario" id="apellidos_usuario">
        <input type="password" name="password" id="password">
        <button type="submit">Registrar</button>
	</form>
</body>
</html>