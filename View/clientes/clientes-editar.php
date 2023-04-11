<h1 class="page-header">Editar cliente</h1>



<form id="frm-clientes" action="?c=clientes&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $pvd->id; ?>" />

    <div class="form-group">
        <label>Nombres</label>
        <input type="text" name="nombres" value="<?php echo $pvd->nombres; ?>" class="form-control" placeholder="Ingrese nombre" />
    </div>

    <div class="form-group">
        <label>Teléfono</label>
        <input type="text" name="telefono" value="<?php echo $pvd->telefono; ?>" class="form-control" placeholder="Ingrese teléfono" />
    </div>

    <div class="form-group">
        <label>Dirección</label>
        <input type="text" name="direccion" value="<?php echo $pvd->direccion; ?>" class="form-control" placeholder="Ingrese dirección" />
    </div>

    <div class="form-group">
        <label>Origen</label>
        <input type="text" name="origen" value="<?php echo $pvd->origen; ?>" class="form-control" placeholder="Ingrese origen" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function() {
        $("#frm-clientes").submit(function() {
            return $(this).validate();
        });
    })
</script>