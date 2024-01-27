<?php

include_once __DIR__ . '/Cibo.php';

class Category{
    
    public $animalCategory;
   
    public $img;


 public function __construct(string $_animalCategory, string $_img) {
    
    $this->animalCategory = $_animalCategory;
   
    $this->img = $_img;
}





}



?>