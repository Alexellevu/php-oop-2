<?php 


class user {
   private $name;
   private $lastname;
   private $mail;
   private $password;
   private $type;

   function __construct($name, $lastname, $mail, $password, $type)
   {
    $this ->name= $name;
    $this ->lastname = $lastname;
    $this ->mail= $mail;
    $this ->password =$password;
    $this->type = $type;
    
   }


}

class premium_user extends user{
    function __construct($name, $lastname, $mail, $password, $type, $discount, $code)
   {
    parent::__construct($name, $lastname, $mail, $password, $type);
    $this ->discount = $discount;
    $this ->code = $code;
    }

    public function setDiscount($discount, $code){
        if ($code == 'abc123') {
            return $this-> discount = 10;
        }
    }


}

class product 
{
    public $name;
    public $brand;
    public $quanty;
    public $price;
    
   function __construct($name, $brand, $quanty, $price)
   {
    $this ->name= $name;
    $this ->brand = $brand;
    $this ->quanty= $quanty;
    $this ->price =$price;
    
    
   }
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>