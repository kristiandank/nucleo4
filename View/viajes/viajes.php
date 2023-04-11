
<h1 class="page-header">Viajes</h1>

<div class="well well-sm text-right">
    <a class="btn btn-primary" href="?c=viajes&a=Nuevo">Nuevo Viaje</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Id</th>
            <th style="width:120px;">Lugar</th>
            <th style="width:120px;">Fecha</th>
            <th style="width:120px;">Hora</th>
            <th style="width:120px;">Precio</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id; ?></td>
            <td><?php echo $r->lugar; ?></td>
            <td><?php echo $r->fecha; ?></td>
            <td><?php echo $r->hora; ?></td>
            <td><?php echo $r->precio; ?></td>
            <td>
                <a href="?c=viajes&a=Crud&id=<?php echo $r->id; ?>" class="btn btn-info">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=viajes&a=Eliminar&id=<?php echo $r->id; ?>" class="btn btn-danger">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
