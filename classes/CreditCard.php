<?php
require_once __DIR__ . "/PaymentMethod.php";

class CreditCard extends PaymentMethod
{
    protected $cardNumber;
    protected $expiringDate;
    protected $ccv;




    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;
    }
    public function setExpiringDate($expiringDate)
    {
        $this->expiringDate = $expiringDate;
    }
    public function setCcv($ccv)
    {
        $this->ccv = $ccv;
    }
    public function getCardData()
    {
        return [$this->type, $this->cardNumber, $this->expiringDate, $this->ccv];
    }
}
