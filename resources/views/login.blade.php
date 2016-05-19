<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <title>Asoka Gestión - Login</title>
    <link rel="shortcut icon" href="/images/favicon.ico" />
    <meta name='robots' content='noindex'>
    <meta name="viewport" content="width=device-width">
    <link rel='stylesheet' href='/css/main.css'>
</head>

<body  id="login-screen">
<h1>Gestión Asoka</h1>
<div id='cont'>
	<h2>Login</h2>
	<header> <img src='/images/logo.png' alt='Asoka el grande: Asociación para la defensa y protección de los animales'> </header>
	<div class='error-log'></div>
	<form action="panel">
		<fieldset>
		<input id='login' placeholder='Usuario o email'>
		<input id='pass' type='password' placeholder='Contraseña'>
		<input id='recordar' type='checkbox' name='Recordar'>
				<label for='recordar'>Recuérdame</label>
		<input type='submit' class='boton' value='Entrar'>
		</fieldset>
	</form>
	</div>
	<footer> <a href=''> Recuperar contraseña </a> <a id='sol-user' href=''> Solicitar usuario </a> </footer>
</body>
</html>