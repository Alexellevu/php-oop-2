<?php 
class Product 
{   
    
    protected $name;
    protected $desc;
    protected $price;

    
   function __construct($name, $desc, $price)
   {
    $this ->name= $name;
    $this ->quanty= $desc;
    $this ->price = $price;
    }

    public function name()
    {
        return $this->name;
    }

 
    
}

