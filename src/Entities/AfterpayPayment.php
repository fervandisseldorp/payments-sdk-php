<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 4-6-2018
 * Time: 17:13
 */

namespace CMPayments\PaymentSdk\Entities;


class AfterpayPayment
{
    // TODO finish implementation completely
    /**
     * @var string
     */
    private $description;

    /**
     * AfterpayPayment constructor.
     * @param Money $money
     * @param string $purchaseId
     * @param string $description
     */
    public function __construct(Money $money, $purchaseId, $description)
    {
        parent::__construct($money, 'Afterpay', $purchaseId);
        $this->description = $description;
    }

    /** @inheritdoc */
    public function toArray()
    {
        $array = parent::toArray();
        $array['payment_details']['description'] = $this->description;
        return $array;
    }

}