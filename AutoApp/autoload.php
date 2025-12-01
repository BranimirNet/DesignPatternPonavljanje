<?php

spl_autoload_register(function ($className): void{
    if(strpos($className, 'AutoApp\\') != 0){
        $relativeClass = substr($className, strlen('AutoApp\\'));
        $putanja = __DIR__ . '/' . str_replace('\\', '/', $relativeClass) . '.php';
        if(file_exists($putanja)){
            require_once $putanja;
        }
        else{
            echo "Datoteka za klasu {$className} ne postoji.";
        }
}
}
    
);






?>