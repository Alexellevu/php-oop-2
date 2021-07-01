<?php

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
?>