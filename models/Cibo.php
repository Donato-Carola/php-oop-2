<?php

require_once __DIR__ . './Product.php';
class Cibo extends Product
{
    public $nameBrand;
    public $description;
    public $weight;
    public $taste;
    public $price;

    
public function __construct(string $_name, string $_tipo, Category $_category, string $_nameBrand,string $_description, 
                            string $_weight, string $_taste,float $_price)
{
  parent::__construct( $_name, $_tipo,$_category);
  $this->nameBrand = $_nameBrand;    
  $this->description = $_description;  
  $this->weight = $_weight;  
  $this->taste = $_taste;  
  $this->price = $_price;  
    

}

}

?>
