<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estiloslogin.css">
	<link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Roboto: ital, wght @ 1300 & display = swap "rel =" stylesheet ">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<title>Login</title>
</head>
<body>
	<div class="contenedor">
		<h1 class="titulo">Iniciar Sesión Clientes</h1>
		<hr class="border">
		<form method="get" name="login" class="formulario" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
			<div class="form-group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="Usuario">
			</div>
			
			<div class="form-group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder=" Contraseña">
				<i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			
		</form>
		<p class="texto-registrate">
			¿Aún no tienes cuenta?
			<a href="registrate.php">Registrate</a>
		</p>
	</div>
	
</body>
</html>