<?php

namespace App\Controller;

class HomeController
{
    public function index()
    {
        require_once("src/view/home/home.php");
    }
    
    public function inscription()
    {
        require_once("src/view/home/inscription.php");
    }
    
    public function connexion()
    {
        require_once("src/view/home/connexion.php");
    }
}