<?php
require_once __DIR__ . "/../traits/IdGenerator.php";

class Product
{
    protected $itemId;
    protected $itemName;
    protected $itemDescription;
    protected $itemPrice;

    use IdGenerator;


    public function __construct($_id, $_name, $_description, $_price)
    {
        $this->setItemId($_id);
        $this->setItemName($_name);
        $this->setItemDescription($_description);
        $this->setItemPrice($_price);
    }



    //setter

    public function setItemId($value)
    {
        $this->itemId = $value . $this->genProductId();
    }

    public function setItemName($value)
    {
        $this->itemName = $value;
    }

    public function setItemDescription($value)
    {
        $this->itemDescription = $value;
    }

    public function setItemPrice($value)
    {
        $this->itemPrice = $value;
    }

    //getter

    public function getItemId()
    {

        return $this->itemId;
    }
    public function getItemName()
    {

        return $this->itemName;
    }
    public function getItemDescription()
    {

        return $this->itemDescription;
    }
    public function getItemPrice()
    {

        return $this->itemPrice;
    }
}
