<?php

abstract class Model
{
    protected $stmt;
    protected $dbh;

    public function __construct()
    {
        $this->dbh = new PDO('mysql:host=localhost;dbname=PharmaLiv;charset=utf8', 'root', '');
    }

    public function prepare($query)
    {
        $this->stmt = $this->dbh->prepare($query);
    }

    //this function receive an associative array of parameters to bind to the statement
    public function bind($array)
    {
        foreach ($array as $param => $value) {
            switch(true) {
                case is_int($value):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($value):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($value):
                    $type = PDO::PARAM_NULL;
                    break;
                default:
                    $type = PDO::PARAM_STR;
            }

            $this->stmt->bindValue($param, $value, $type);
        }
    }

    public function execute()
    {
        $this->stmt->execute();
    }


    public function resultSet()
    {
        $this->stmt->execute();

        return $this->stmt->fetchAll();
    }

    public function login($userType, $login, $password)
    {
        $this->prepare("SELECT * FROM {$userType} WHERE login = :login");
        $this->bind(array(
            "login" => $login,
        ));
        $this->execute();
        $informations = $this->resultSet();

        if(password_verify($password, $informations['password'])){
            
        }

    }
}