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


Inicio de sesión

Login: admin
Password: admin

----------------------------------------------------------------------------

# Título del Proyecto
Morfeo21
Consiste en una página web que facilita la gestión de sillas, mesas y salas de un restaurante.

## Comenzando 🚀
Estas instrucciones te permitirán obtener una copia del proyecto en funcionamiento en tu máquina local para propósitos de desarrollo y pruebas.

Mira Deployment (Despliegue) para conocer como desplegar el proyecto.

### Pre-requisitos 📋
Para este proyecto necesitas tener instalado:
- Visual Studio Code
- XAMPP
- MySQL Workbench 8.0 CE
- Tener una cuenta creada en GitHub

### Instalación 🔧
- Primero: Instalamos en nuestro equipo el Visual Studio Code, el XAMPP y el MySQL Workbench 8.0 CE para nuestra base de datos.
- Segundo: Creamos un repositorio nuevo en GitHub y lo nombramos.
- Tercero: Abrimos la ruta de nuestro proyecto desde el Visual Studio Code y seguidamente abrimos una nueva terminal
- Cuarto: Ahora nos vamos al repositorio de GitHub creado anteriormente y copiamos el link de dicho repositorio. En este caso seria: https://github.com/marcdcc/PR1.git
- Quinto: Volvemos al terminal abierto en Visual Studio Code, selecionamos el terminal de "Git Bash" y ponemos el seiguiente comando: git clone "La url del repositorio creado en GitHub"
- Sexto: En este momento ya tenemos nuestro proyecto subido al repositorio de GitHub

## Despliegue 📦
Despliegue en local:
- Cuando tenemos el XAMPP instalado, lo abrimos y activamos la opción que pone Apache (la carpeta que contiene todo el proyecto ha de estar en la ruta: C:\xampp\htdocs\www\).
- Si ya tenemos nuestra carpeta del proyecto en la ruta especificada anteriormente, abrimos nuestro navegador y en la barra de busqueda tendremos de poner lo siguiente: http://localhost/www/ "El nombre de la carpeta del proyecto"/.
- Cuando le demos al Intro se nos abrira nuestro proyecto en local y podremos visualizar si hay alguna cosa que falla o si todo esta perfecto.

Despligue en un hosting:
- Primero nos creamos una cuenta en nuetro hosting.
- Luego seleccionamos la opción de website y le ponemos un nombre.
- A continuación se nos abrira una nueva pestaña en nuestro navegador y ahi es donde tendremos que cojer la carpeta de nuestro proyecto y arrastrala para poder verla desde una URL.
- Cuando ya hemos pasado toda la carpeta tendremos que insertar nuestra base de datos. Donde le tendremos que poner un nombre a la base de datos, un usario y una contraseña.
- Despues de eso nos dirigiremos a nuestro archivo que conecta nuestro proyecto con nuestra base de datos y cambiaremos el usuario, la contraseña y el nombre de la base de datos por los que le hemos puesto en el paso anterior.
- Es posible que cuando abramos la URL de nuestro proyecto desde el hosting nos den errores de codigo y/o de nuestra base de datos. Los tendremos que arreglar.
- Tras arreglar todos los errores, nos dirigiremos a la pestaña donde tenemos toda la configuración que le podemos poner a nuestra página web y veremos la URL del proyecto.
- Si clicamos en la URL podremos visualizar que nuestro proyecto se ve y funciona correctamente desde el hosting.


## Construido con 🛠️
* [XAMPP](https://www.apachefriends.org/es/index.html)
* [Visual Studio Code](https://code.visualstudio.com)
* [GitHub](https://github.com)
* [000WebHost](https://es.000webhost.com/)

## Versionado 📌
- 1.1.0

## Autores ✒️
- Marc Diaz - BBDD y página de filtros
- Laura Fernandez - CSS, JS, y Login
- Gerard Gomez - PHP
