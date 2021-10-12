<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">CRUD basico</h1>
        <p class="lead">realizado con PHP 7, Bootstrap 5 y MariaDB</p>
        <hr class="my-2">
        
        <p>
            Realizacion de un CRUD simple con la finalidad de reafirmar conceptos basicos de la programacion con 
            <i>PHP</i> y <i>MariaDB</i>; y tambien para poner en practicar el uso de <i>Bootstrap 5</i>.
        </p>

        <h5>Nota:</h5>
        <p>
            Los datos de conexion a la base de datos estan ocultos.
            Se debe crear un archivo llamado <i>config.php</i> en la raiz del proyecto, el cual contenga las constantes con los
            datos para la conexion con PDO. Las constantes son:
            <ul>
                <li>DB_HOST: Direccion de host(por defecto 'localhost').</li>
                <li>DB_DBNAME: Nombre de la base de datos.</li>
                <li>DB_USER: Nombre de usuario para la conexion a la base de datos.</li>
                <li>DB_PASS: Contraseña para la conexion a la base de datos.</li>
            </ul>
        </p>

        <p>
            La estructura de la tabla <i>empleados</i> es simple, consta de:
            <ul>
                <li> (<b>PK</b>) <i>id</i>: Integer </li>
                <li> <i>name</i>: Varchar(50) </li>
                <li> <i>email</i>: Varchar(50) </li>
            </ul>
        </p>

        <p class="lead">
            <a class="btn btn-primary btn-lg" href="?controller=empleados&action=index" role="button">Lista de empleados</a>
        </p>
    </div>
</div>