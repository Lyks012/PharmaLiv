<?php

abstract class Controller
{

    protected $model;
    
    public function openView($viewName)
    {
        require_once("view/".$viewName.".php");
    }
}