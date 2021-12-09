<?php
require_once __DIR__ . "/Customer.php";

class PremiumCustomer extends Customer {
  protected $discount = "20%";


  function __construct($_id, $_firstname, $_lastname, $_email, $_discount)
  {
      parent::__construct($_id, $_firstname, $_lastname, $_email);
    $this->setDiscount($_discount);
  }

  public function setDiscount($value){
      $this->discount =$value;
  }
}


?>