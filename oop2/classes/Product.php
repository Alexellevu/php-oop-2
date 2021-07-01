<?php 
class Product 
{   
    
    protected $name;
    protected $desc;
    protected $price;

    
   function __construct($name, $desc, $price)
   {
    $this ->name= $name;
    $this ->desc= $desc;
    $this ->price = $price;
    }

    public function name()
    {
        return $this->name;
    }
    
    public function desc()
    {
        return $this->desc;
    }

    public function price()
    {
        return $this->price;
    }

 
    
}

