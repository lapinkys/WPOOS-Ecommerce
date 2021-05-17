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
}