<?php 

trait Callname
{
    protected $name;
    public function getName()
    {
        return $this->name;
    }
} 

trait Call_lastname
{
    protected $lastname;
    public function getLastname()
    {
         return $this->lastname;
    }
}

class User {
        use Callname;
        use Call_lastname;
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
    
    
    }
    class Premium_user extends User{
        use Callname;
        use Call_lastname;
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

       $user = new User('Alex','ellevu','alex@example.it','alx', 777);
       $user ->getname();
       $user ->getLastname();

       $user2 = new Premium_user('Emma','Abate','Emma@example.it','Emm', 456);
       $user2 ->getname();
       $user2 ->getLastname();
       

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
    <h1>Utente Standard: <?php echo $user->getName() ?></h1>
    <h1>cognome: <?php echo $user->getlastname() ?></h1>
    <h1>Utente Premium: <?php echo $user2->getName() ?></h1>
    <h1>cognome: <?php echo $user2->getlastname() ?></h1>
    
    
</body>
</html>