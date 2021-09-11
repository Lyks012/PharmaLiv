<?php

namespace App\Controller;

use Exception;

class ClientController extends Controller
{
    public function home()
    {
        $this->load('client/home');
    }

    public function myOrders()
    {

        $query = $this->entityManager->createQuery("SELECT s FROM \\App\\Entities\\Sector s");
        $sectors = $query->getResult();
        $this->load('client/myOrders', array("sectors" => $sectors));
    }

    public function logout()
    {
        session_start();
        session_destroy();
        $this->load('home/home');
    }
}