<?php

require_once __DIR__ . '/Cibo.php';
require_once __DIR__ . '/Category.php';


class Product{
    public $name;
    
    public $tipo;
    public $category;


 public function __construct(string $_name, string $_tipo, Category $_category) {
    $this->name = $_name;
    
    $this->tipo = $_tipo;
    $this->category = $_category;
}





}



?>