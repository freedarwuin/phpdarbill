<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instalador PHPDARBILL</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link type='text/css' href='css/style.css' rel='stylesheet'/>
    <link type='text/css' href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body style='background-color: #FBFBFB;'>
	<div id='main-container'>
		<div class='header'>
			<div class="header-box wrapper">
				<div class="hd-logo"><a href="#"><img src="img/logo.png" alt="Logo"/></a></div>
			</div>
		</div>

		<div class="span12">
			<h4> Instalador PHPDARBILL </h4>
			<?php
			if (isset($_GET['_error']) && ($_GET['_error']) == '1') {
				echo '<h4 style="color: red;"> No se puede conectar la base de datos. ¡Asegúrese de que la información de la base de datos sea correcta y vuelva a intentarlo! </h4>';
			}//

			$cururl = (((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off')|| $_SERVER['SERVER_PORT'] == 443)?'https':'http').'://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
			$appurl = str_replace('/install/step3.php', '', $cururl);
			$appurl = str_replace('?_error=1', '', $appurl);
			$appurl = str_replace('/system', '', $appurl);
			?>

			<form action="step4.php" method="post">
				<fieldset>
					<legend>Conexión de base de datos &amp configuración del sitio</legend>

					<div class="form-group">
						<label for="appurl">URL de la aplicación</label>
						<input type="text" class="form-control" id="appurl" name="appurl" value="<?php echo $appurl; ?>">
						<span class='help-block'>URL de la aplicación sin barra inclinada al final de la URL (por ejemplo, http://172.16.10.10). Por favor, mantenga el valor predeterminado, si no está seguro.</span>
					</div>
					<div class="form-group">
						<label for="dbhost">Base de datos</label>
						<input type="text" class="form-control" id="dbhost" name="dbhost">
					</div>
					<div class="form-group">
						<label for="dbuser">Nombre de usuario de la base de datos</label>
						<input type="text" class="form-control" id="dbuser" name="dbuser">
					</div>
					<div class="form-group">
						<label for="dbpass">Contraseña de la base de datos</label>
						<input type="text" class="form-control" id="dbpass" name="dbpass">
					</div>

					<div class="form-group">
						<label for="dbname">Nombre de la base de datos</label>
						<input type="text" class="form-control" id="dbname" name="dbname">
					</div>

					<button type="submit" class="btn btn-primary">Enviar</button>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="footer">Copyright &copy; 2021 PHPDARBILL. Reservados todos los derechos<br/><br/></div>
</body>
</html>

