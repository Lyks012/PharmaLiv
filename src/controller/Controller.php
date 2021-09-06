<?php

namespace App\Controller;

use Exception;

abstract class Controller
{
    protected $entityManager;

    public function __construct()
    {
        require_once "bootstrap.php";
        $this->entityManager = $entityManager;
    }
    

    public function load(){
        $nums = func_num_args();
        $args = func_get_args();

        $file = "src/view/". $args[0] .".php";

        if($nums == 2) $data = $args[1];
        
        if(file_exists($file)){
            require_once($file);
        }
        else{
            throw new Exception("File does not exist");
        }
    }
}

