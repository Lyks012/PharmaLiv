<?php

class ClientModel extends Model
{
    public function register($clientInfos)
    {
        $this->prepare("INSERT INTO clients VALUES(null, :first_name, :last_name, :email, :phone_number, :birth_date, :genre, :adress, :ongoing_treatment, :login, :password, :path");
        $this->bind($clientInfos);
        $this->execute();
    }

}

