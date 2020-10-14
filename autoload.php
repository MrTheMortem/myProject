<?php

    spl_autoload_register(function ($className){
        $namespace = 'myLib\\';
        if(strpos($className, $namespace)!== false){
            $className = substr($className,strlen($namespace));
        }
        $fileName = $_SERVER['DOCUMENT_ROOT'] . '/lib/' . $className . '.php';
        if(is_file($fileName)){
            include $fileName;
        }else{
            throw new Exception("Can't load . '{$className}' .  from file . '{$fileName}'");
        }
    });
