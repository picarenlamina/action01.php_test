Aplicación de ejemplo en **PHP puro + HTML** con **tests funcionales** y **CI mediante GitHub Actions**.

La aplicación muestra una calculadora web sencilla que suma dos números introducidos por el usuario.

-- Instalacion dependencias
#composer install

-- Servidor PHP embebido
#php -S localhost:8000 -t src

-- Url
http://localhost:8000/index.php

--Ejecucion test 
#php vendor/bin/phpunit
