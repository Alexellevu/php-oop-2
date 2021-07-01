<?php 
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
?>
