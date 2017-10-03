ReActive
============

Autor: Francis Suniaga
Fecha: 02/10/2017

Proyecto creado en symfony 2, con BD de datos MySql, permite registrar un producto en la base de datos, el cual consiste en llenar un formulario indicando lo siguiente: <br>

Nombre de producto <br>
Si cumple / no cumple / no aplica, un codigo de barra <br>
Si cumple se debe agregar el codigo de barra <br>
No cumple debe agragar observacion <br>
Tipo de producto (perecedero / no perecedero) <br>
Fecha de vencimiento en caso de ser perecedero <br>
Cantidad de productos <br>



A continuación se presentan los pasos a seguir para la instalación de la aplicación. <br>

Clonar el repositorio  como se indica a continuacion:
========================================================
$ git clone https://github.com/fsuniaga/ReActive.git <br>
$ cd ReActive/ <br>
$ composer install --no-interaction <br>
$ php app/console server:run <br>


Crear Base de datos
=======================
1. Configurar el archivo app/config/parameters.yml  

parameters: <br> 
    database_host: 127.0.0.1 <br> 
    database_port: null <br> 
    database_name: proysymfony <br> 
    database_user: root <br> 
    database_password: null <br> 
    mailer_transport: smtp <br> 
    mailer_host: 127.0.0.1 <br> 
    mailer_user: null <br> 
    mailer_password: null <br> 
    secret: ThisTokenIsNotSoSecretChangeIt <br>
# ...

2. Luego ejecutar el comando en la consola 
$ php app/console doctrine:database:create <br> 

$ php app/console doctrine:schema:update --force <br> 

Insertar el siguiente script en la base de datos 
=================================================

INSERT INTO `users` (`id`, `email`, `password`, `username`, `first_name`, `last_name`, `role`, `is_active`, `created_at`, `updated_at`) VALUES
(4, 'admin@gmail.com', '$2y$12$vNQOSpROHc/sWhMlq3sYD.fSo/HByC.O9uWHm73U4F8NZq6iujkdi', 'admin', 'Admin', 'Admin', 'ROLE_ADMIN', 1, '2017-10-02 22:57:29', '2017-10-02 22:57:29'); <br>


Luego debe ingresar a la aplicacion en la siguiente ruta
=======================================================
http://localhost:8000 <br>

Usuario: admin@gmail.com <br>
Contraseña: 123456 <br>
