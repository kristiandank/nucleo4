<h1 class="page-header">Empleados</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=empleados&a=Nuevo">Nuevo Empleado</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id</th>
            <th style="width:120px;">Nombre</th>
            <th style="width:120px;">Edad</th>
            <th style="width:120px;">Teléfono</th>
            <th style="width:120px;">Dirección</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($this->model->Listar() as $r) : ?>
            <tr>
                <td><?php echo $r->id; ?></td>
                <td><?php echo $r->nombre; ?></td>
                <td><?php echo $r->edad; ?></td>
                <td><?php echo $r->telefono; ?></td>
                <td><?php echo $r->direccion; ?></td>
                <td>
                    <a href="?c=empleados&a=Crud&id=<?php echo $r->id; ?>" class="btn btn-info">Editar</a>
                </td>
                <td>
                    <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=empleados&a=Eliminar&id=<?php echo $r->id; ?>" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>