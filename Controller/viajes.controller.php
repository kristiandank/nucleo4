<?php
require_once 'model/viajes.php';

class ViajesController
{

    private $model;

    public function __CONSTRUCT()
    {
        $this->model = new viajes();
    }

    public function Index()
    {
        require_once 'view/header.php';
        require_once 'view/viajes/viajes.php';
    }

    public function Crud()
    {
        $pvd = new viajes();

        if (isset($_REQUEST['id'])) {
            $pvd = $this->model->Obtener($_REQUEST['id']);
        }

        require_once 'view/header.php';
        require_once 'view/viajes/viajes-editar.php';
    }

    public function Nuevo()
    {
        $pvd = new viajes();

        require_once 'view/header.php';
        require_once 'view/viajes/viajes-nuevo.php';
    }

    public function Guardar()
    {
        $pvd = new viajes();

        $pvd->id = $_REQUEST['id'];
        $pvd->lugar = $_REQUEST['lugar'];
        $pvd->fecha = $_REQUEST['fecha'];
        $pvd->hora = $_REQUEST['hora'];
        $pvd->precio = $_REQUEST['precio'];

        $this->model->Registrar($pvd);

        header('Location: index.php');
    }

    public function Editar()
    {
        $pvd = new viajes();

        $pvd->id = $_REQUEST['id'];
        $pvd->lugar = $_REQUEST['lugar'];
        $pvd->fecha = $_REQUEST['fecha'];
        $pvd->hora = $_REQUEST['hora'];
        $pvd->precio = $_REQUEST['precio'];

        $this->model->Actualizar($pvd);

        header('Location: index.php');
    }

    public function Eliminar()
    {
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}
