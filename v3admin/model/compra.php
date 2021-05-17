<?php
class compra
{
	private $pdo;
    
    public $id;
    public $Cliente;
    public $producto;
    public $iva;
    public $neto;
    public $total;
    public $Fecha;
    public $cantidad;
    public $estado;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::StartUp();     
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM factura");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarCliente()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM cliente");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ListarJuego()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM juego");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM factura WHERE id = ?");
			          

			$stm->execute(array($id));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM factura WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE factura SET 
						cliente  = ?,
						producto = ?, 
						total    = ?,
						iva      = ?, 
						fecha    = ?,
						cantidad = ?,
                        neto     = ?,
						estado   = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->cliente, 
	                    $data->producto, 
	                    $data->fecha, 
	                    $data->total, 
	                    $data->iva, 
	                    $data->neto, 
	                    $data->cantidad,
	                    $data->estado,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(compra $data)
	{
		try 
		{
		$sql = "INSERT INTO factura (cliente,producto,fecha, total, iva, neto, cantidad, estado) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->cliente, 
                    $data->producto, 
                    $data->fecha, 
                    $data->total, 
                    $data->iva, 
                    $data->neto, 
                    $data->cantidad,
               		$data->estado
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}