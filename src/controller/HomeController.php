<?php

namespace App\Controller;

use Doctrine\DBAL\Types\ArrayType;
use Exception;

class HomeController extends Controller
{
    public function index()
    {
        $this->load('home/home');
    }
    
    public function registerPage()
    {

        $query = $this->entityManager->createQuery('Select s.id, s.ville, s.commune FROM \App\Entities\Sector s');
        $sectors = $query->getResult();
        $data = array("sectors" => $sectors);
        $this->load('home/inscription', $data);
    }
    
    public function loginPage()
    {
        $this->load('home/connexion');
    }

    public function registerClient()
    {
        $entity = new \App\Entities\Client($_POST);

        $this->entityManager->persist($entity);
        $this->entityManager->flush();
        $this->load('home/connexion');
        
    }

    public function registerDrugstore()
    {
        $sector = $this->entityManager->find("\\App\Entities\\Sector", $_POST['sector_id']);
        
        $_POST['sector'] = $sector;

        $entity = new \App\Entities\Drugstore($_POST);

        $this->entityManager->persist(($entity));
        $this->entityManager->flush();
        $this->load('home/connexion');
    }

    private function tryAuth($authInfos)
    {
        $loginWith = filter_var($authInfos['login'], FILTER_VALIDATE_EMAIL) ? 'email' : 'login';
        
        $user = $this->entityManager->getRepository("\\App\\Entities\\".$authInfos['userType'])
                                    ->findOneBy(
                                        array(
                                            $loginWith => $authInfos['login'],
                                            "password" => $authInfos['password']
                                        )
                                    );

        if($user)
        {
            return $user;
        }
        
        throw new Exception("Mauvais login ou mot de passe");

    }

    private function setSessionVariables($user, $userType)
    {
        session_start();
        $_SESSION['userType'] = $userType;
        $_SESSION['id'] = $user->getId();
        $_SESSION['login'] = $user->getLogin();
    }

    public function login(){
        $user = $this->tryAuth($_POST);
        $this->setSessionVariables($user, $_POST['userType']);
        $this->load('client/home');
    }
}
