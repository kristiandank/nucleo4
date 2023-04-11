<?php
class clientes
{
	private $pdo;

	public $id;
	public $nombres;
	public $telefono;
	public $direccion;
	public $origen;

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
			$stm = $this->pdo->prepare("SELECT * FROM clientes");
			$stm->execute();
			return $stm->fetchAll(PDO::FETCH_OBJ);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try {
			$stm = $this->pdo->prepare("SELECT * FROM clientes WHERE id = ?");
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
				->prepare("DELETE FROM clientes WHERE id = ?");

			$stm->execute(array($id));
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try {
			$sql = "UPDATE clientes SET
						nombres          = ?,
						telefono        = ?,
						direccion        = ?,
            			origen        = ?
				    WHERE id = ?";
			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->nombres,
						$data->telefono,
						$data->direccion,
						$data->origen,
						$data->id,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}

	public function Registrar(clientes $data)
	{
		try {
			$sql = "INSERT INTO clientes (id,nombres,telefono,direccion,origen)
		        VALUES (?, ?, ?, ?, ?)";

			$this->pdo->prepare($sql)
				->execute(
					array(
						$data->id,
						$data->nombres,
						$data->telefono,
						$data->direccion,
						$data->origen,
					)
				);
		} catch (Exception $e) {
			die($e->getMessage());
		}
	}
}
