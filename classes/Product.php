<?php

class Product {
    protected $itemId;
    protected $itemName;
    protected $itemDescription;
    protected $itemPrice;


    public function __construct($id, $name, $description, $price) {
        $this->itemId = $id;
        $this->itemName = $name;
        $this->itemDescription = $description;
        $this->itemPrice = $price;
    }

   

   
}

?>