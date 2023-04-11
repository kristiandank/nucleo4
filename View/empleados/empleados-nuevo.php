<h1 class="page-header">Nuevo empleado</h1>

<form id="frm-empleados" action="?c=empleados&a=Guardar" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label>Id</label>
        <input type="text" name="id" value="<?php echo $pvd->id; ?>" class="form-control" placeholder="Ingrese id" />
    </div>

    <div class="form-group">
        <label>Nombre</label>
        <input type="text" name="nombre" value="<?php echo $pvd->nombre; ?>" class="form-control" placeholder="Ingrese nombre" />
    </div>

    <div class="form-group">
        <label>Edad</label>
        <input type="text" name="edad" value="<?php echo $pvd->edad; ?>" class="form-control" placeholder="Ingrese edad" />
    </div>
    
    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefono" value="<?php echo $pvd->telefono; ?>" class="form-control" placeholder="Ingrese teléfono" />
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $pvd->direccion; ?>" class="form-control" placeholder="Ingrese dirección" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Guardar</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        $("#frm-clientes").submit(function() {
            return $(this).validate();
        });
    })
</script>