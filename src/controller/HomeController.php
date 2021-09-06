<?php

namespace App\Controller;

use Doctrine\DBAL\Types\ArrayType;

class HomeController extends Controller
{
    public function index()
    {
        $this->load('home/home');
    }
    
    public function inscription()
    {

        $query = $this->entityManager->createQuery('Select s.id, s.ville, s.commune FROM \App\Entities\Sector s');
        $sectors = $query->getResult();
        $data = array("sectors" => $sectors);
        $this->load('home/inscription', $data);
    }
    
    public function connexion()
    {
        $this->load('home/connexion');
    }

    /*public function registerClient()
    {
        $client = new \App\Entities\Client($_POST);
        $this->entityManager->persist($client);
        $this->entityManager->flush();
    }

    public function registerDeliveryPeople()
    {
        $deliveryPeople = new \App\Entities\DeliveryPeople($_POST);
        $this->entityManager->persist($deliveryPeople);
        $this->entityManager->flush();
    }
    
    public function registerDrugstore()
    {
        $drugstore = new \App\Entities\Drugstore($_POST);
        $this->entityManager->persist($drugstore);
        $this->entityManager->flush();
    }*/

    public function register()
    {
        $availabeEntities = array('Drugstore', 'Client', 'DeliveryPeople');

        if(in_array($_GET['entity'], $availabeEntities)){
            $className = "\\App\\Entities\\".$_GET['entity'];
            $entity = new $className($_POST);

            $this->entityManager->persist($entity);
            $this->entityManager->flush();
        }

        
    }
}