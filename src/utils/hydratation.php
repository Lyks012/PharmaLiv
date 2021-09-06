<?php

namespace App\Mixins;

trait Hydrate
{
    public function hydrate($data)
    {
        foreach($data as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if(is_callable(array($this, $method)))
            {
                $this->$method($value);
            }
        }
    }
}