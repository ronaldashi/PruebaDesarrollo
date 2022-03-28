<?php
require_once 'model/room.php';

class roomController{
    
    private $model;
    
    public function __construct(){
        $this->model = new room();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/room/room.php';
       
    }
    
    public function Crud(){
        $room = new room();
        
        if(isset($_REQUEST['id'])){
            $room = $this->model->getroom_type($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/room/room-edit.php';
        
    }
    
    public function Guardar(){
        $room = new room();
        
        $room->id = $_REQUEST['id'];
        $room->name = $_REQUEST['name'];
        $room->nof = $_REQUEST['nof'];          
        
        $room->id > 0 
            ? $this->model->Actualizar($room)
            : $this->model->aggroom_type($room);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}