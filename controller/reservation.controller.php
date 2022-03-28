<?php
require_once 'model/reservation.php';

class reservationController{
    
    private $model;
    
    public function __construct(){
        $this->model = new reservation();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/reservation/reservation.php';
       
    }
    
    public function Crud(){
        $reservation = new reservation();
        
        if(isset($_REQUEST['id'])){
            $reservation = $this->model->getreservation($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/reservation/reservation-edit.php';
        
    }
    
    public function Guardar(){
        $reservation = new reservation();
        
        $reservation->id = $_REQUEST['id'];
        $reservation->startDate = $_REQUEST['startDate'];    
        $reservation->endDate = $_REQUEST['endDate'];
        $reservation->admin_id = $_REQUEST['admin_id'];      
        
        $reservation->id > 0 
            ? $this->model->Actualizar($reservation)
            : $this->model->aggreservation_type($reservation);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}