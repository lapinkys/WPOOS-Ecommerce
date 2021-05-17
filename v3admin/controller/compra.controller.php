<?php
require_once 'model/compra.php';

class compraController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new compra();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/compra/compra.php';
       
    }
    
    public function Crud(){
        $compra = new compra();
        
        if(isset($_REQUEST['id'])){
            $compra = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/compra/compra-editar.php';
        
    }
    
    public function Guardar(){
        $compra = new compra();
        
        $compra->cliente = $_REQUEST['cliente'];
        $compra->nombreproducto = $_REQUEST['producto'];
        $porciones = explode(",", $_REQUEST['producto']);
        $compra->producto = $porciones[0]; 
        $compra->precio = $porciones[1]; 
        $compra->cantidad = $_REQUEST['cantidad'];
        $compra->total = ($_REQUEST['iva'] * ( $porciones[1] * $_REQUEST['cantidad'] )) / 100;
        $compra->iva = $_REQUEST['iva'];
        $compra->neto = $porciones[1] * $_REQUEST['cantidad'];
        $compra->fecha = date("Y-m-d H:i:s"); 
        $compra->estado = $_REQUEST['estado'];   
      

        $compra->id > 0 
            ? $this->model->Actualizar($compra)
            : $this->model->Registrar($compra);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}