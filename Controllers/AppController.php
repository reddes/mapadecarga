<?php

namespace Controllers;

class AppController{

    
    public function template(){
    
        if(CONTROLLER){
            
            echo CONTROLLER;
            if(class_exists('Controllers'. DS .'UsersController.php')){
                echo 'class loaded';
            }
            else{
                echo 'class not loaded';
            }
        }
        else{
            require_once(ROOT . DS . 'template/index.php');
            
        }
        
}
    
}



?>