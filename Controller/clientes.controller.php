<?php
require_once 'model/clientes.php';

class ClientesController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new clientes();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/clientes/clientes.php';
    }

    public function Crud()
    {
        $pvd = new clientes();

        if (isset($_REQUEST['id'])) {
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/clientes/clientes-editar.php';
    }

    public function Nuevo()
    {
        $pvd = new clientes();

        require_once 'view/header.php';
        require_once 'view/clientes/clientes-nuevo.php';
    }

    public function Guardar()
    {
        $pvd = new clientes();

        $pvd->id = $_REQUEST['id'];
        $pvd->nombres = $_REQUEST['nombres'];
        $pvd->telefono = $_REQUEST['telefono'];
        $pvd->direccion = $_REQUEST['direccion'];
        $pvd->origen = $_REQUEST['origen'];

        $this->model->Registrar($pvd);

        header('Location: index.php?c=clientes');
    }

    public function Editar()
    {
        $pvd = new clientes();

        $pvd->id = $_REQUEST['id'];
        $pvd->nombres = $_REQUEST['nombres'];
        $pvd->telefono = $_REQUEST['telefono'];
        $pvd->direccion = $_REQUEST['direccion'];
        $pvd->origen = $_REQUEST['origen'];

        $this->model->Actualizar($pvd);

        header('Location: index.php?c=clientes');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php?c=clientes');
    }
}
