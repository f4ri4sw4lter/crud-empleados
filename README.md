# crud-empleados
Aplicación básica para CRUD de empleados (PHP 7.4, Bootstrap 5, MariaDB).
Permite la creacion, modificacion y borrado de una clase Empleado sencilla que consta de tres atributos (id, name y email).

## Modelo de datos
La tabla de empleados consta con:

* id: Integer (PK)
* name: Varchar(50)
* email: Varchar(50)

## Implementacion
Para la utilizacion de este proyecto se necesita un servidor Apache, PHP 7 o mayor y un SGBD que trabaje MariaDB.

### Implementacion con XAMPP
La herramienta XAMPP nos brinda todo lo que necesitamos para correr este y casi cualquier proyecto PHP.
La misma cuenta con un servicio APACHE, una version de PHP a partir de la 7 y un SGBD llamado *phpmyadmin* que corre MariaDB.

Descarge e instale la version de XAMPP adecuada para el sistema operativo que este utilizando. Puede descargarlo desde la pagina principal. [Link](https://www.apachefriends.org/es/download.html)

Ahora debera clonar el proyecto en la carpeta *htdocs* dentro del directorio de XAMPP.

Puede hacerlo con el comando:

`git clone https://github.com/f4ri4sw4lter/crud-empleados.git`

Luego para visualizar la aplicacion solo debe iniciar el servicio APACHE y MySQL(MariaDB) en la interfaz de XAMPP y cualquier navegador dirigirse a la direccion:

http://localhost/crud-empleados/

## Nota
Los datos de conexion a la base de datos estan ocultos.
Se debe crear un archivo llamado *config.php* en la carpeta raiz del proyecto, el cual contenga las constantes con los datos para la conexion con PDO. 
Las constantes son:
* DB_HOST: Direccion de host(por defecto 'localhost').</li>
* DB_DBNAME: Nombre de la base de datos.</li>
* DB_USER: Nombre de usuario para la conexion a la base de datos.</li>
* DB_PASS: Contraseña para la conexion a la base de datos.</li>

En PHP las constantes se definen de la siguiente manera:

`define('<Nombre de la constante>', '<Valor de la constante>');`

Donde los signos <> no deben incluirse.

Recuerda que por convencion, los nombres de las constantes se escriben en mayusculas.
