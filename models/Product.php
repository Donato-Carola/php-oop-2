<?php

require_once __DIR__ . '/Cibo.php';
class Product{
    public $name;
    public $animalCategory;
    public $tipo;
    public $img;


 public function __construct(string $_name, string $_animalCategory, string $_tipo, string $_img) {
    $this->name = $_name;
    $this->animalCategory = $_animalCategory;
    $this->tipo = $_tipo;
    $this->img = $_img;
}





}



?>