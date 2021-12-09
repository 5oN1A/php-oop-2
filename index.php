<?php
include "./classes/Product.php";
include "./classes/Customer.php";
include "./classes/CreditCard.php";
include_once "./classes/Paypal.php";



$products = [
    new Product(24, 'Vanilla', 'Parfum Vanilla', 10.50),
    new Product(7, 'Rose', 'Parfum Rose', 15.20),
    new Product(12, 'Cardamom', 'Parfum Cardamom', 12.00),
    new Product(4, 'Cinnamon', 'Lipstick Cinnamon', 8.6)
];

$cardNumber = '554487445';
$cc1 =  new CreditCard('Credit Card');
$cc1->setCardNumber('1689656565566565');
$cc1->setExpiringDate('11/09/2022');
$cc1->setCcv(888);

$pp1 =  new payPal('Paypal');
$pp1->setUsername('giacomo.fizzi@gmail.it');
$pp1->setPassword('cndj');


$paymentMethods = [
    $cc1->getCardData(),
    $pp1->getPaypalAccount()
];

//var_dump($paymentMethods);




try {
    $customer1 = new Customer(250, 'Giacomo', 'Fizzi', 'giacomo.fizzimail.it');
    $customer1->addToCart($products[0], $products[3]);
    $customer1->addPaymentMethod($paymentMethods[1]);
    var_dump($customer1);
} catch (Exception $e) {
    echo "Failed to generate the instance for the user due to the following error: ";
    echo $e->getMessage() . "<br>";
    echo $e->getFile() . "<br>";
    echo $e->getLine() . "<br>";
    echo $e->getTraceAsString() . "<br>";
}

$customer2 = new Customer(111, 'Serena', 'Colombo', 'serenacolombo@hotmail.it');
$customer2->addToCart($products[1], $products[2]);
$customer2->addPaymentMethod($paymentMethods[0]);
var_dump($customer2);
