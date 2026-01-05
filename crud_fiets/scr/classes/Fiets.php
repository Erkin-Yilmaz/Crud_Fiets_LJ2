<?php

namespace Demon\CrudFiets;

class Fiets
{
    private $id;
    private $merk;
    private $type;
    private $prijs;

    public function __construct($id, $merk, $type, $prijs)
    {
        $this->id = $id;
        $this->merk = $merk;
        $this->type = $type;
        $this->prijs = $prijs;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getMerk()
    {
        return $this->merk;
    }

    public function getType()
    {
        return $this->type;
    }

    public function getPrijs()
    {
        return $this->prijs;
    }
}