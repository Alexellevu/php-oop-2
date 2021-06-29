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

    public function setDiscountPremium($discount, $type){
        if ($type == 'Premium') {
            return $this-> discount = 15;
        }
    }

    

}

class product 
{
    public $name;
    public $brand;
    public $quanty;
    public $price;
    public $discount = 0;
    
   function __construct($name, $brand, $quanty, $price, $discount)
   {
    $this ->name= $name;
    $this ->brand = $brand;
    $this ->quanty= $quanty;
    $this ->price = $price;
    $this ->discount = $discount;
    
    
   }

 
    
}

class cart{
    public $items;
    public $total;

    public function __construct($items,$total)
    {
       $this->items = $items;
       $this->$total = $total;
    }

    public function setItems($items) {
        $this->items = $items;
    }
    

}
class CreditCard
{
    private $name;
    private $number;
    private $deadline;
    private $code;


    public function __construct($name, $number, $deadline, $code)
    {
        $this ->name= $name;
        $this ->number = $number;
        $this ->deadline= $deadline;
        $this ->code = $code;
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