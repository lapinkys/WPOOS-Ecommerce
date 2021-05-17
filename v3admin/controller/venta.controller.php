<?php
require_once 'model/venta.php';

class ventaController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new venta();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/venta/venta.php';
       
    }
    
    public function Crud(){
        $venta = new venta();
        
        if(isset($_REQUEST['id'])){
            $venta = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/venta/venta-editar.php';
        
    }
    
    public function Guardar(){
        $venta = new venta();
        
        $venta->Cliente = $_REQUEST['Cliente'];
        $venta->juego = $_REQUEST['juego'];
        $venta->Fecha = $_REQUEST['Fecha'];   
      

        $venta->id > 0 
            ? $this->model->Actualizar($venta)
            : $this->model->Registrar($venta);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}