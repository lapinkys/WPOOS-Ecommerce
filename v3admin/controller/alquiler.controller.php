<?php
require_once 'model/alquiler.php';

class alquilerController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new alquiler();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/alquiler/alquiler.php';
       
    }
    
    public function Crud(){
        $alquiler = new alquiler();
        
        if(isset($_REQUEST['id'])){
            $alquiler = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alquiler/alquiler-editar.php';
        
    }
    
    public function Guardar(){
        $alquiler = new alquiler();
        
        $alquiler->Cliente = $_REQUEST['Cliente'];
        $porciones = explode(",", $_REQUEST['juego']);
        $alquiler->juego = $porciones[0]; 
        $alquiler->precio = $porciones[1]; 
        $alquiler->Fecha = date("Y-m-d H:i:s");  


        $alquiler->id > 0 
            ? $this->model->Actualizar($alquiler)
            : $this->model->Registrar($alquiler);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}