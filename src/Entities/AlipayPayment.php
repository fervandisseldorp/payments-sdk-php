<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 4-6-2018
 * Time: 17:10
 */

namespace CMPayments\PaymentSdk\Entities;

use Money\Money;

class AlipayPayment extends Payment
{
    /**
     * @var string
     */
    private $description;

    /**
     * AlipayPayment constructor.
     * @param Money $money
     * @param string $purchaseId
     * @param string $description
     */
    public function __construct(Money $money, $purchaseId, $description)
    {
        parent::__construct($money, 'Alipay', $purchaseId);
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