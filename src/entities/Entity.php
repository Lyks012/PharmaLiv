<?php

namespace App\Entities;

require_once("src/utils/hydratation.php");

class Entity
{
    use \App\Mixins\Hydrate;
    public function __construct($data)
    {
        $this->hydrate($data);
    }
}