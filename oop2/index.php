<?php 

class User {

   protected $name;
   protected $lastname;
   protected $mail;
   protected $username;
   private $password;
   


   function __construct(string $name, string $lastname, string $mail,string $username ,string $password)
   {
    $this ->name= $name;
    $this ->lastname = $lastname;
    $this ->mail= $mail;
    $this ->username =$username; 
    $this ->password =$password;
   
   }

   public function name()
   {
       return $this ->name;
   }

}




class Premium_user extends User{
   
protected $isPremium = true;
protected $discount;

public function discount()
{
    $this->discount = 15;
    return $this->discount;
}

public function isPremium()
{
    return $this->isPremium;
}

}

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

class Cart{
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
    protected $number;
    private $deadline;
    private $ccv;


    public function __construct($number, $deadline, $ccv)
    {
        $this ->number= $number;
   
        $this ->deadline= $deadline;
        $this ->ccv = $ccv;
    }
};

 

$products = [
    new Product('Samsung','ccccccccccccccccc',500.99),
    new Product('Huawei','ccsssfsfs',400.99),
    new Product('Oppo','cdasfdsdsdsdsg',300.99),
    new Product('Apple','cvvvvvvvvvvvvvvvvvv',800.99)
   
];

$users = [

    new User('Alex','ellevu','alex@example.it','alx', 777),
    new User('Giuseppe','Don','peppe@example.it','pep', 555),
    new User('Pasquale','Perr','pasq@example.it','psq', 888),
    new User('Ilaria','Dm','Ilaria@example.it','ilary', 222),
    new Premium_user('Emma','Abate','Emma@example.it','Emm', 456)
];

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
    <?php foreach($products as $product) :?>
            <h1><?php echo $product ->name(); ?></h1>
            

    <?php endforeach; ?>
</body>
</html>