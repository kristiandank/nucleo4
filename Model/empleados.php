<?php
class empleados
{
	private $pdo;

	public $id;
	public $nombre;
	public $edad;
	public $telefono;
	public $direccion;

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
			$stm = $this->pdo->prepare("SELECT * FROM empleados");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM empleados WHERE id = ?");
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
				->prepare("DELETE FROM empleados WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try {
			$sql = "UPDATE empleados SET
						nombre = ?,
						edad = ?,
						telefono = ?,
						direccion = ?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->nombre,
						$data->edad,
						$data->telefono,
						$data->direccion,
						$data->id,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(empleados $data)
	{
		try {
			$sql = "INSERT INTO empleados (id,nombre,edad,telefono,direccion)
		        VALUES (?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id,
						$data->nombre,
						$data->edad,
						$data->telefono,
						$data->direccion,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
