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
?>