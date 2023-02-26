<?php
/**
* PHP Mikrotik Billing (https://github.com/hotspotbilling/PHPMixBill/)
**/
//error_reporting (0);
$appurl = $_POST['appurl'];
$db_host = $_POST['dbhost'];
$db_user = $_POST['dbuser'];
$db_password = $_POST['dbpass'];
$db_name = $_POST['dbname'];
$cn = '0';
try{
    $dbh = new pdo( "mysql:host=$db_host;dbname=$db_name",
        "$db_user",
        "$db_password",
        array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    $cn = '1';
}
catch(PDOException $ex){
    $cn = '0';
}

if ($cn == '1') {
    $input = '<?php

define(\'APP_URL\', \'' . $appurl . '\');
$_app_stage = \'Live\';

// Database PHPMixBill
$db_host	    = \'' . $db_host . '\';
$db_user        = \'' . $db_user . '\';
$db_password	= \'' . $db_password . '\';
$db_name	    = \'' . $db_name . '\';

// Database Radius
$radius_host	    = \'' . $db_host . '\';
$radius_user        = \'' . $db_user . '\';
$radius_pass    	= \'' . $db_password . '\';
$radius_name	    = \'' . $db_name . '\';

if($_app_stage!=\'Live\'){
    error_reporting(E_ERROR);
    ini_set(\'display_errors\', 1);
    ini_set(\'display_startup_errors\', 1);
}else{
    error_reporting(E_ERROR);
    ini_set(\'display_errors\', 0);
    ini_set(\'display_startup_errors\', 0);
}
';
$wConfig = "../config.php";
    $fh = fopen($wConfig, 'w') or die("Can't create config file, your server does not support 'fopen' function,
	please create a file named - config.php with following contents- <br/>$input");

    fwrite($fh, $input);
    fclose($fh);

    $sql = file_get_contents('PHPMixBill.sql');

    $qr = $dbh->exec($sql);

} else {
    header("location: step3.php?_error=1");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Instalador PHPMixBill</title>
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
			<h4> Instalador PHPMixBill </h4>
			<?php
			if ($cn == '1') {
			?>
				<p><strong>Archivo de configuración creado y base de datos importada.</strong><br></p>
				<form action="step5.php" method="post">
					<fieldset>
						<legend>Haga clic en Continuar</legend>
						<button type='submit' class='btn btn-primary'>Continuar</button>
					</fieldset>
				</form>
			<?php
			} elseif ($cn == '2') {
			?>
				<p> La conexión MySQL fue exitosa. Ocurrió un error al agregar datos en MySQL. Sin éxito
					Instalación. Consulte la instalación manual en el sitio web github.com/ibnux/PHPMixBill o comuníquese con PHPMixBill@ibnux.com para
					ayudando en la instalación</p>
			<?php
			} else {
			?>
			<p> Conexión MySQL fallida.</p>
			<?php
			}
			?>
		</div>
	</div>

	<div class="footer">Copyright &copy; 2021 PHPMixBill. Reservados todos los derechos<br/><br/></div>
</body>
</html>

