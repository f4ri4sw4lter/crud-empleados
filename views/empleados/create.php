<div class="card">
    <div class="card-header">
        Agregar empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input required type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre del empleado">
              <!--<small id="helpId" class="form-text text-muted">Help text</small>-->
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Correo</label>
              <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Correo del empleado">
              <!--<small id="emailHelpId" class="form-text text-muted">Help text</small>-->
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Agregar empleado">
            <a href="?controller=empleados&action=index" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
</div>