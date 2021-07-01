<?php 
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
?>