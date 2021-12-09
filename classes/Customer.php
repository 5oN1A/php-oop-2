<?php
require_once __DIR__ . "/../traits/Cart.php";
require_once __DIR__ . "/../exception/InvalidEmail.php";

class Customer
{
  protected $id;
  protected $firstname;
  protected $lastname;
  protected $email;
  protected $cart = [];
  protected $payment = [];





  public function __construct($_id, $_firstname, $_lastname, $_email)
  {
    $this->setId($_id);
    $this->setFirstname($_firstname);
    $this->setLastname($_lastname);
    $this->setEmail($_email);
  }

  use Cart;
  use IdGenerator;

  //setter

  public function setId($_value)
  {

    $this->id = $_value . $this->genUserId();
  }

  public function setFirstname($_value)
  {

    $this->firstname = $_value;
  }

  public function setLastname($value)
  {

    $this->lastname = $value;
  }

  public function setEmail($value)
  {

    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
      throw new InvalidEmail;
    }

    $this->email = $value;
  }

  //getter

  public function getId()
  {

    return $this->id;
  }

  public function getFullname()
  {

    return $this->firstname . " " . $this->firstname;
  }

  public function getEmail()
  {

    return $this->email;
  }

  //metodi 
  public function addToCart(...$product)
  {

    array_push($this->cart, $product);
  }

  public function addPaymentMethod(...$type)
  {

    array_push($this->payment, $type);
  }
}
