# PHPDARBILL - Facturación Mikrotik

## Característica

- Generador e impresión de cupones
- Auto registro
- Enrutador múltiple Mikrotik
- Punto de acceso y PPPOE
- Fácil instalación
- Multi lenguaje
- Pasarela de Pago Midtrans, Xendit y Tripay
- Validación de SMS para iniciar sesión
- Notificación de Whatsapp al Consumidor
- Notificación de Telegram para Admin

## Pasarela de pago

- [Binance.com](https://) | 
- [Paypal.com](https://) |

Haga clic en el enlace para descargar

Ir a discusión si desea otra pasarela de pago

## Requisitos del sistema

La mayoría de los servidores web actuales con PHP y MySQL instalados podrán ejecutar PHPMixBill

Requerimientos mínimos

- Sistema operativo Linux o Windows
- PHP Versión 7.0+
- Soporte para PDO y MySQLi
- Biblioteca de imágenes GD2
- Soporte para rizos
- MySQL Versión 4.1.x y superior

Se puede instalar en el dispositivo Raspberry Pi.

El problema con Windows es difícil de configurar cronjob, mejor Linux

## Instalación

- Cambiar el nombre de **pages_template** a **pages**
- Cambiar el nombre de **config.sample.php** a **config.php** y hacer que se pueda escribir (chmod 777)
- crear una carpeta grabable **ui/cache/** y **ui/compiled**
- Abrir web y ejecutar instalación
- configurar cronjobs o scheduller para **system/cron.php**
- hacer que **config.php** no se pueda escribir (chmod 644)


Ver [WIKI](https://github.com/freedarwuin/phpdarbill/wiki/Instalation)

Leer [WIKI](https://github.com/freedarwuin/phpdarbill/wiki/Instalation)

## ACTUALIZAR

para la versión anterior, debajo de la Versión 6, haga una copia de seguridad de **system/config.php**, elimine todos los archivos excepto la carpeta **pages**, cargue todos los archivos nuevos, coloque **config.php** en la carpeta raíz (no en el sistema carpeta), llegó a la carpeta **/install** y ejecute Actualizar.

para la versión 6 anterior, simplemente reemplace todos los archivos, usando filezilla puede elegir sobrescribir si el tamaño o el tiempo del archivo es diferente.

## Sistema RADIO

Todavía en desarrollo

## Soporte pagado

Comience desde $ 25 o $ 50

[Telegrama](https://)

[Sitio web](https://)

## Licencia

Licencia pública general GNU versión 2 o posterior

ver ficha LICENCIA

## Donar a Darwuin

[![Donar](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://)

Número: (+58) 4129056224
