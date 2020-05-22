<?php

class PaymentAdapter extends Paypal
{
    private Payoneer $paymentService;

    public function __construct(Payoneer $payoneer)
    {
        $this->paymentService = $payoneer;
    }

    public function sendMoney(int $recipientId, int $amount): void
    {
        $this->paymentService->purchase($recipientId, $amount);
    }
}