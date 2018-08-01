<?php

namespace App\Receiver;

class Ramen
{
    private $name;
    private $ramen;

    public function setName($name)
    {
        $this->name = sprintf('%sラーメン', $name);
    }

    public function getName()
    {
        return $this->name;
    }

    public function setRamen($ramen)
    {
        $this->ramen = $ramen;
    }

    public function getRamen()
    {
        return $this->ramen;
    }

    public function call()
    {
        echo sprintf('%s できたよー！<br>', $this->getName());
    }
}