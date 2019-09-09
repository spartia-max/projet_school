<?php

namespace App;

class autoloader{

    static function register(){
        spl_autoload_register(array(__CLASS__ ,'autoload'));
    }
    static function autoload($classe){
        if(strpos($classe,__NAMESPACE__.'\\')===0){
            $classe=str_replace(__NAMESPACE__.'\\','',$classe);
            $classe=str_replace('\\','/',$classe);
        require __DIR__.'/' . $classe . '.php';

        }
    }
}