<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesión</title>
	<link rel="stylesheet" href="styleregistro.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

	<header>
		<h1>Iniciar sesión</h1>
	</header>
	<div>
		<form action="grabar.php" method="post">
			<label for="usuario">Usuario:</label>
			<input type="text" name="usuario" id="usuario" required>
			<label for="password">Contraseña:</label>
			<input type="password" name="passwd" id="passwd" required>
			<input type="submit" name="submit" value="Iniciar sesión">
		</form>
	</div>
	<a id="regresar" href="./index.html">Regresar</a>
	<footer>
		<p>&copy; 2023 Todos los derechos reservados.</p>
	</footer>

</body>
</html>