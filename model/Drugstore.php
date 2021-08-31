<?php

class DrugstoreModel extends Model
{

    public function addSector($sector){
        $this->prepare('INSERT INTO sectors VALUES(null, :sector_name)');
        $this->bind(array( "sector_name" => ($sector)));
        return $this->dbh->lastInsertId();
    }
    
    public function register($drugstoreInfos){
        //$sector_id = $this->addSector($sector);
        $this->prepare('INSERT INTO drugstores VALUES(null, :name, :email, :adress, :phone_number, :owner_name, :opening_hours, :login, :password, :sector_id)');
        $this->bind(
            array_merge(
                $drugstoreInfos,
                array(
                    //"sector_id" => $sector_id
                )
            )
        );
        $this->execute();
    }


}