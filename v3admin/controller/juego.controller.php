<?php
require_once 'model/juego.php';

class juegoController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new juego();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/juego/juego.php';
       
    }
    
    public function Crud(){
        $juego = new juego();
        
        if(isset($_REQUEST['id'])){
            $juego = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/juego/juego-editar.php';
        
    }
    
    public function Guardar(){
        $juego = new juego();
        
        $juego->id = $_REQUEST['id'];
        $juego->codigo = $_REQUEST['codigo'];
        $juego->titulo = $_REQUEST['titulo'];
        $juego->nombre = $_REQUEST['nombre'];
        $juego->precio = $_REQUEST['precio'];    
        $juego->director = $_REQUEST['director'];
        $juego->protagonistas = $_REQUEST['protagonistas'];
        $juego->productor = $_REQUEST['productor'];   
        $juego->tecnologias = $_REQUEST['tecnologias'];
        $juego->año = $_REQUEST['año'];   

        $juego->id > 0 
            ? $this->model->Actualizar($juego)
            : $this->model->Registrar($juego);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}