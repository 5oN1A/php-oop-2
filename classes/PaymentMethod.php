<?php

class PaymentMethod
{
   public $type;

   public function __construct($type)
   {
      $this->type = $type;
   }
}
