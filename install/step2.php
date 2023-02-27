<!DOCTYPE html>
<html lang="en">

<head>
    <title>Instalador PHPDARBILL</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link type='text/css' href='css/style.css' rel='stylesheet' />
    <link type='text/css' href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body style='background-color: #FBFBFB;'>
    <div id='main-container'>
        <div class='header'>
            <div class="header-box wrapper">
                <div class="hd-logo"><a href="#"><img src="img/logo.png" alt="Logo" /></a></div>
            </div>
        </div>

        <div class="span12">
            <h4> Instalador PHPDARBILL </h4>
            <?php
            $passed = '';
            $ltext = '';
            if (version_compare(PHP_VERSION, '7.2.0') >= 0) {
                $ltext .= 'Para ejecutar PHPDARBILL, necesita al menos la versión de PHP 7.2.0, su versión de PHP es: ' . PHP_VERSION . " Tested <strong>---PASSED---</strong><br/>";
                $passed .= '1';
            } else {
                $ltext .= 'Para ejecutar PHPDARBILL, necesita al menos la versión de PHP 7.2.0, su versión de PHP es: ' . PHP_VERSION . " Tested <strong>---FAILED---</strong><br/>";
                $passed .= '0';
            }

            if (extension_loaded('PDO')) {
                $ltext .= 'PDO está instalado en su servidor: ' . "Tested <strong>---PASSED---</strong><br/>";
                $passed .= '1';
            } else {
                $ltext = 'PDO está instalado en su servidor: ' . "Tested <strong>---FAILED---</strong><br/>";
                $passed .= '0';
            }

            if (extension_loaded('pdo_mysql')) {
                $ltext .= 'El controlador PDO MySQL está habilitado en su servidor: ' . "Tested <strong>---PASSED---</strong><br/>";
                $passed .= '1';
            } else {
                $ltext .= 'El controlador PDO MySQL no está habilitado en su servidor: ' . "Tested <strong>---FAILED---</strong><br/>";
                $passed .= '0';
            }

            if ($passed == '111') {
                echo ("<br/> $ltext <br/> ¡Excelente! Prueba del sistema completada. Puede ejecutar PHPDARBILL en su servidor. Haga clic en Continuar para el siguiente paso.
				<br><br>
				<a href=\"step3.php\" class=\"btn btn-primary\">Continuar</a><br><br><a href=\"update.php\" class=\"btn btn-primary\">Actualización de Sistema</a>");
            } else {
                echo ("<br/> $ltext <br/> Lo siento. Los requisitos de PHPDARBILL no están disponibles en su servidor.
				Póngase en contacto con darwuinjose@gmail.com con este código- $passed O póngase en contacto con el administrador de su servidor
				<br><br>
				<a href=\"#\" class=\"btn btn-primary disabled\">Corrija el problema para continuar</a>");
            }
            ?>
        </div>
    </div>
    <div class="footer">Copyright &copy; 2021 PHPDARBILL. Reservados todos los derechos<br /><br /></div>
</body>

</html>