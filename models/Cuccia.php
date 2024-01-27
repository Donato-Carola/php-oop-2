<?php
class Cuccia extends Product
{
    public $nameBrand;
    public $description;
    public $weight;
    public $dimensione;
    public $price;



    public function __construct(
        string $_name,
        string $_tipo,
        Category $_category,
        string $_nameBrand,
        string $_description,
        string $_weight,
        string $_dimensione,
        float $_price
    ) {
        parent::__construct($_name, $_tipo, $_category);
          $this->nameBrand = $_nameBrand;
          $this->description = $_description;
          $this->weight = $_weight;
          $this->dimensione = $_dimensione;
          $this->price = $_price;
    }
}
