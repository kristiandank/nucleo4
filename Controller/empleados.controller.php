<?php
require_once 'model/empleados.php';

class EmpleadosController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new empleados();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/empleados/empleados.php';
    }

    public function Crud()
    {
        $pvd = new empleados();

        if (isset($_REQUEST['id'])) {
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/empleados/empleados-editar.php';
    }

    public function Nuevo()
    {
        $pvd = new empleados();

        require_once 'view/header.php';
        require_once 'view/empleados/empleados-nuevo.php';
    }

    public function Guardar()
    {
        $pvd = new empleados();

        $pvd->id = $_REQUEST['id'];
        $pvd->nombre = $_REQUEST['nombre'];
        $pvd->edad = $_REQUEST['edad'];
        $pvd->telefono = $_REQUEST['telefono'];
        $pvd->direccion = $_REQUEST['direccion'];

        $this->model->Registrar($pvd);

        header('Location: index.php?c=empleados');
    }

    public function Editar()
    {
        $pvd = new empleados();

        $pvd->id = $_REQUEST['id'];
        $pvd->nombre = $_REQUEST['nombre'];
        $pvd->edad = $_REQUEST['edad'];
        $pvd->telefono = $_REQUEST['telefono'];
        $pvd->direccion = $_REQUEST['direccion'];

        $this->model->Actualizar($pvd);

        header('Location: index.php?c=empleados');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=empleados');
    }
}
