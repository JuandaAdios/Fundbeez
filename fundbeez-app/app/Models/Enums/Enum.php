<?php

namespace App\Models\Enums;
use ReflectionClass;

class Enum
{
    public function getString($key){
        $class = get_called_class();
        $access = new $class;

        if(isset($access->name[$key])){
            return $access->name[$key];
        }else{
            return 'Key not found';
        }
    }

    public function getAllString(){
        $class = get_called_class();
        $access = new $class;

        if(isset($access->name)){
            return $access->name;
        }else{
            return 'Enum name not defined';
        }
    }
}
