<?php
require_once __DIR__ . "/PaymentMethod.php";

class Paypal extends PaymentMethod
{
    protected $username;
    protected $password;


    public function setUsername($username)
    {
        $this->username = $username;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getPaypalAccount()
    {
        return [$this->type, $this->username, $this->password];
    }
}
