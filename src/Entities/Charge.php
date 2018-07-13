<?php

namespace CMPayments\PaymentSdk\Entities;

use CMPayments\PaymentSdk\MoneyConverter;
use Money\Money;

/**
 * Class Charge
 * @package CMPayments\PaymentSdk\Entities
 * @author Jory Geerts <jory.geerts@cm.nl>
 */
class Charge
{
    /**
     * @var Money
     */
    private $money;

    /**
     * @var Payment[]
     */
    private $payments;

    /**
     * @var description: string
     */
    private $description;

    /**
     * @var purchase_id: string
     */
    private $purchase_id;
    /**
     * Charge constructor.
     *
     * @param Money $money
     * @param array|null $payments
     */
    public function __construct(Money $money, array $payments = null, string $description = null, string $purchase_id = null)
    {
        $this->money = $money;
        $this->payments = $payments ? $payments : [];
        $this->description = $description;
        $this->purchase_id = $purchase_id;
    }

    /**
     * @param Payment $payment
     * @return Charge
     */
    public function addPayment(Payment $payment)
    {
        $this->payments[] = $payment;
        return $this;
    }

    /**
     * Create an array structure that represents the charge.
     *
     * @return array
     */
    public function toArray()
    {
        if($this->description != null && $this->purchase_id != null){
            return [
                'amount'   => (new MoneyConverter())->toFloat($this->money),
                'currency' => $this->money->getCurrency(),
                'payments' => array_map(function (Payment $p) {
                    return $p->toArray();
                }, $this->payments),
                'description' => $this->description,
                'purchase_id' => $this->purchase_id
            ];
        }
        else {
            return [
                'amount'   => (new MoneyConverter())->toFloat($this->money),
                'currency' => $this->money->getCurrency(),
                'payments' => array_map(function (Payment $p) {
                    return $p->toArray();
                }, $this->payments),
            ];
        }
    }
}
