<?php

class DeliveryPeopleModel extends Model
{
    public function register($deliveryPersonInfos)
    {
        $this->prepare("INSERT INTO clients VALUES(null, :first_name, :last_name, :phone_number, :email, :login, :password, :path");
        $this->bind($deliveryPersonInfos);
        $this->execute();
    }
}