# MORFEO21

##URL HOSTING 

https://morfeo21v2.000webhostapp.com



Hay un services/config.php ignorado por contener datos sensibles, tener en cuenta cuando se importa el reporistorio en local.
Tiene la siguiente estructura:

//<?php

 define("SERVIDOR","XXXXXX");
 define("USUARIO","XXXXXXX");
 define("PASSWORD","XXXXXXX");
 define("BD","XXXXXX");

//?>
--------------------------------------------------------------------------------
Integrantes del grupo:
Marc Diaz, Laura Fernandez y Gerard Gomez


Inicio de sesi贸n

Login: admin
Password: admin

----------------------------------------------------------------------------

# T铆tulo del Proyecto
Morfeo21
Consiste en una p谩gina web que facilita la gesti贸n de sillas, mesas y salas de un restaurante.

## Comenzando 馃殌
Estas instrucciones te permitir谩n obtener una copia del proyecto en funcionamiento en tu m谩quina local para prop贸sitos de desarrollo y pruebas.

Mira Deployment (Despliegue) para conocer como desplegar el proyecto.

### Pre-requisitos 馃搵
Para este proyecto necesitas tener instalado:
- Visual Studio Code
- XAMPP
- MySQL Workbench 8.0 CE
- Tener una cuenta creada en GitHub

### Instalaci贸n 馃敡
- Primero: Instalamos en nuestro equipo el Visual Studio Code, el XAMPP y el MySQL Workbench 8.0 CE para nuestra base de datos.
- Segundo: Creamos un repositorio nuevo en GitHub y lo nombramos.
- Tercero: Abrimos la ruta de nuestro proyecto desde el Visual Studio Code y seguidamente abrimos una nueva terminal
- Cuarto: Ahora nos vamos al repositorio de GitHub creado anteriormente y copiamos el link de dicho repositorio. En este caso seria: https://github.com/marcdcc/PR1.git
- Quinto: Volvemos al terminal abierto en Visual Studio Code, selecionamos el terminal de "Git Bash" y ponemos el seiguiente comando: git clone "La url del repositorio creado en GitHub"
- Sexto: En este momento ya tenemos nuestro proyecto subido al repositorio de GitHub

## Despliegue 馃摝
Despliegue en local:
- Cuando tenemos el XAMPP instalado, lo abrimos y activamos la opci贸n que pone Apache (la carpeta que contiene todo el proyecto ha de estar en la ruta: C:\xampp\htdocs\www\).
- Si ya tenemos nuestra carpeta del proyecto en la ruta especificada anteriormente, abrimos nuestro navegador y en la barra de busqueda tendremos de poner lo siguiente: http://localhost/www/ "El nombre de la carpeta del proyecto"/.
- Cuando le demos al Intro se nos abrira nuestro proyecto en local y podremos visualizar si hay alguna cosa que falla o si todo esta perfecto.

Despligue en un hosting:
- Primero nos creamos una cuenta en nuetro hosting.
- Luego seleccionamos la opci贸n de website y le ponemos un nombre.
- A continuaci贸n se nos abrira una nueva pesta帽a en nuestro navegador y ahi es donde tendremos que cojer la carpeta de nuestro proyecto y arrastrala para poder verla desde una URL.
- Cuando ya hemos pasado toda la carpeta tendremos que insertar nuestra base de datos. Donde le tendremos que poner un nombre a la base de datos, un usario y una contrase帽a.
- Despues de eso nos dirigiremos a nuestro archivo que conecta nuestro proyecto con nuestra base de datos y cambiaremos el usuario, la contrase帽a y el nombre de la base de datos por los que le hemos puesto en el paso anterior.
- Es posible que cuando abramos la URL de nuestro proyecto desde el hosting nos den errores de codigo y/o de nuestra base de datos. Los tendremos que arreglar.
- Tras arreglar todos los errores, nos dirigiremos a la pesta帽a donde tenemos toda la configuraci贸n que le podemos poner a nuestra p谩gina web y veremos la URL del proyecto.
- Si clicamos en la URL podremos visualizar que nuestro proyecto se ve y funciona correctamente desde el hosting.


## Construido con 馃洜锔?
* [XAMPP](https://www.apachefriends.org/es/index.html)
* [Visual Studio Code](https://code.visualstudio.com)
* [GitHub](https://github.com)
* [000WebHost](https://es.000webhost.com/)

## Versionado 馃搶
- 1.1.0

## Autores 鉁掞笍
- Marc Diaz - BBDD y p谩gina de filtros
- Laura Fernandez - CSS, JS, y Login
- Gerard Gomez - PHP
