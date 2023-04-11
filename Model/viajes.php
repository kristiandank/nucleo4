<?php
class viajes
{
	private $pdo;

	public $id;
	public $lugar;
	public $fecha;
	public $hora;
	public $precio;

	public function __CONSTRUCT()
	{
		try {
			$this->pdo = Database::Conectar();
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try {
			$result = array();
			$stm = $this->pdo->prepare("SELECT * FROM viajes");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM viajes WHERE id = ?");
			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try {
			$stm = $this->pdo
				->prepare("DELETE FROM viajes WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try {
			$sql = "UPDATE viajes SET
						lugar          = ?,
						fecha        = ?,
						hora        = ?,
						precio        = ?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->lugar,
						$data->fecha,
						$data->hora,
						$data->precio,
						$data->id,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(viajes $data)
	{
		try {
			$sql = "INSERT INTO viajes (lugar,fecha,hora,precio)
		        VALUES ( ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						//$data->id,
						$data->lugar,
						$data->fecha,
						$data->hora,
						$data->precio,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
