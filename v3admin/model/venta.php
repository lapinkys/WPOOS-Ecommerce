<?php
class venta
{
	private $pdo;
    
    public $id;
    public $Cliente;
    public $juego;
    public $Fecha;

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

			$stm = $this->pdo->prepare("SELECT * FROM factura WHERE estado = 'pagada' Order By fecha ASC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function SumarTotal()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT SUM(total) as TotalFactura FROM factura WHERE estado = 'pagada' AND DATEDIFF(NOW(), fecha) <= '0' Order By fecha ASC");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function SumarTotalNeto()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT SUM(neto) as TotalNeto FROM factura WHERE estado = 'pagada' AND DATEDIFF(NOW(), fecha) <= '0' Order By fecha ASC");
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

	
}