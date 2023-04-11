<h1 class="page-header">Editar viaje</h1>

<form id="frm-viajes" action="?c=viajes&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $pvd->id; ?>" />

    <div class="form-group">
        <label>Lugar</label>
        <input type="text" name="lugar" value="<?php echo $pvd->lugar; ?>" class="form-control" placeholder="Ingrese lugar" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Fecha</label>
        <input type="text" name="fecha" value="<?php echo $pvd->fecha; ?>" class="form-control" placeholder="Ingrese fecha" />
    </div>

    <div class="form-group">
        <label>Hora</label>
        <input type="text" name="hora" value="<?php echo $pvd->hora; ?>" class="form-control" placeholder="Ingrese hora" />
    </div>

    <div class="form-group">
        <label>Precio</label>
        <input type="text" name="precio" value="<?php echo $pvd->precio; ?>" class="form-control" placeholder="Ingrese precio" />
    </div>

    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-viajes").submit(function(){
            return $(this).validate();
        });
    })
</script>
