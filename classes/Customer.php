<?php 

class Customer {
    public $id;
    public $firstname;
    public $lastname;
    public $email;
    public $cart = [];
    public $payment = [];

    
    public function __construct($id, $firstname, $lastname, $email) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
    }

    //metodo 
    public function addToCart(...$product) {
      array_push($this->cart, $product);
    }

    public function addPaymentMethod(...$type) {
      array_push($this->payment, $type);
    }

    
}

?>