<div class="card">
    <div class="card-header">
        <a name="" id="" class="btn btn-success" href="?controller=empleados&action=create" role="button">Agregar Empleado</a><br>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Correo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($arrEmpleados as $empleado){
                    echo'
                        <tr>
                            <td scope="row">'.$empleado->id.'</td>
                            <td>'.$empleado->name.'</td>
                            <td>'.$empleado->email.'</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a href="?controller=empleados&action=update&id='.$empleado->id.'" class="btn btn-info">Editar</a>
                                    <a href="?controller=empleados&action=delete&id='.$empleado->id.'" class="btn btn-danger">Borrar</a>
                                </div>
                            </td>
                        </tr>
                    ';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>