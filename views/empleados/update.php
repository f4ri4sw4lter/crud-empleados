<div class="card">
    <div class="card-header">
        Editar empleado
    </div>
    <div class="card-body">
        <form action="" method="post">
        <div class="mb-3">
              <label for="id" class="form-label">ID</label>
              <input readonly type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="ID del empleado"
              value="<?=$empleado->id?>">
              <!--<small id="helpId" class="form-text text-muted">Help text</small>-->
            </div>


            <div class="mb-3">
              <label for="name" class="form-label">Nombre</label>
              <input required type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="Nombre del empleado"
              value="<?=$empleado->name?>">
              <!--<small id="helpId" class="form-text text-muted">Help text</small>-->
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Correo</label>
              <input required type="email" class="form-control" name="email" id="email" aria-describedby="emailHelpId" placeholder="Correo del empleado"
              value="<?=$empleado->email?>">
              <!--<small id="emailHelpId" class="form-text text-muted">Help text</small>-->
            </div>

            <input name="" id="" class="btn btn-success" type="submit" value="Editar empleado">
            <a href="?controller=empleados&action=index" class="btn btn-primary">Cancelar</a>
        </form>
    </div>
</div>