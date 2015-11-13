<?php




function __autoload($class){
    
    $class = ROOT . DS . str_replace('\\', DS, $class) . '.php';
    
   
    if( ! file_exists($class)){
        throw new exception("File '{$class}' não encontrado");
    }
    
    require_once $class;
    
    
    
}