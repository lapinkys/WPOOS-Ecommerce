<?php
class juego
{
	private $pdo;
    
    public $id;
    public $codigo;
    public $titulo;
    public $precio;
    public $año;
    public $nombre;
    public $protagonistas;
    public $director;
    public $productor;
    public $tecnologias;

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
			          ->prepare("SELECT * FROM juego WHERE id = ?");
			          

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
			            ->prepare("DELETE FROM juego WHERE id = ?");			          

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
			$sql = "UPDATE juego SET 
						codigo        = ?,
						titulo        = ?, 
                        precio        = ?,					
				    	nombre        = ?,	
				    	protagonistas = ?,	
				    	director      = ?,	
				    	productor     = ?,
				    	año     = ?,	
				    	tecnologias   = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
				    	$data->codigo, 
                        $data->titulo,  
                        $data->precio,
                        $data->nombre, 
                        $data->protagonistas,  
                        $data->director,
                        $data->productor, 
                        $data->año, 
                        $data->tecnologias, 
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(juego $data)
	{
		try 
		{
		$sql = "INSERT INTO juego (codigo, titulo, precio, nombre, protagonistas, director, productor, año, tecnologias) 
		        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->codigo, 
                    $data->titulo,
                    $data->precio,                   
               		$data->nombre, 
                    $data->protagonistas,  
                    $data->director,
                    $data->productor, 
                    $data->año, 
                    $data->tecnologias, 
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}