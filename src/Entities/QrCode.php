<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 29-6-2018
 * Time: 16:21
 */

namespace CMPayments\PaymentSdk\Entities;

use CMPayments\PaymentSdk\MoneyConverter;
use Money\Money;

class QrCode
{
    /**
     * @var Money
     * Officially this only an amount. Money class used for convenience and later versions.
     */
    private $money;

    /**
     * @var boolean
     */
    private $amount_changeable;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $one_off;

    /**
     * @var string
     */
    private $beneficiary;

    /**
     * @var string
     */
    private $purchase_id;

    /**
     * @var datetime
     */
    private $expiration;

    /**
     * @var integer
     */
    private $size;

    public function __construct(Money $money, bool $amount_changeable, string $description, bool $one_off, string $beneficiary, string $purchase_id, \DateTime $expiration, int $size)
    {
        $this->money = $money;
        $this->amount_changeable = $amount_changeable;
        $this->description = $description;
        $this->one_off = $one_off;
        $this->beneficiary = $beneficiary;
        $this->purchase_id = $purchase_id;
        $this->expiration = $expiration;
        $this->size = $size;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'amount' => (new MoneyConverter())->toFloat($this->money),
            'amount_changeable' => $this->amount_changeable,
            'description' => $this->description,
            'one_off' => $this->one_off,
            'beneficiary' => $this->beneficiary,
            'purchase_id' => $this->purchase_id,
            'expiration' => $this->expiration,
            'size' => $this->size
        ];
    }

}