ReActive
============

Autor: Francis Suniaga
Fecha: 02/10/2017

Proyecto creado en symfony 2, con BD de datos MySql, permite registrar un producto en la base de datos, el cual consiste en llenar un formulario indicando lo siguiente:

Nombre de producto
Si cumple / no cumple / no aplica, un codigo de barra
Si cumple se debe agregar el codigo de barra
No cumple debe agragar observacion
Tipo de producto (perecedero / no perecedero)
Fecha de vencimiento en caso de ser perecedero
Cantidad de productos



A continuación se presentan los pasos a seguir para la instalación de la aplicación.

Clonar el repositorio  como se indica a continuacion:
========================================================
$ git clone https://github.com/fsuniaga/ReActive.git
$ cd ReActive/
$ composer install --no-interaction
$ php app/console server:run


Crear Base de datos
=======================
Configurar el archivo 
# app/config/parameters.yml
parameters:
    database_driver:    pdo_mysql
    database_host:      localhost
    database_name:      proyecto_de_prueba
    database_user:      nombre_de_usuario
    database_password:  password

# ...

Luego ejecutar el comando en la consola
$ php app/console doctrine:database:create

$ php app/console doctrine:schema:update --force