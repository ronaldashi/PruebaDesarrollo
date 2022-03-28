<?php
require_once 'model/user.php';

class userController{
    
    private $model;
    
    public function __construct(){
        $this->model = new user();
    }
    
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/user/user.php';
       
    }
    
    public function Crud(){
        $user = new user();
        
        if(isset($_REQUEST['id'])){
            $user = $this->model->getUser($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/user/user-edit.php';
        
    }
    
    public function Guardar(){
        $user = new user();
        
        $user->id = $_REQUEST['id'];
        $user->firstName = $_REQUEST['firstName'];
        $user->lastName = $_REQUEST['lastName'];          
        $user->phoneNumber = $_REQUEST['phoneNumber'];    
        $user->birthDate = $_REQUEST['birthDate'];
        $user->email = $_REQUEST['email'];  
      

        $user->id > 0 
            ? $this->model->Update($user)
            : $this->model->aggUser($user);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }
}