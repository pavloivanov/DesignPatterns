<?php

function processPayment(Paypal $paymentSystem)
{
    $paymentSystem->sendMoney(1, 100);
}

$paypal = new Paypal();

processPayment($paypal);


$payoneer = new PaymentAdapter(new Payoneer());

processPayment($payoneer);