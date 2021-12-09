<?php

trait Cart {
  protected $cart = [];

  public function addToCart(...$_product) {

    array_push($this->cart, $_product);
  }
  }