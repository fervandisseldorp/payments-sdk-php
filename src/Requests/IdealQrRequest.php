<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 1-6-2018
 * Time: 13:07
 */

namespace CMPayments\PaymentSdk\Requests;


use CMPayments\PaymentSdk\Entities\QrCode;
use CMPayments\PaymentSdk\Gateway;

class IdealQrRequest implements RequestInterface
{
    const ENDPOINT = 'qr/v1';

    private $qrCode;


    /** @inheritdoc */
    public function getEndpoint()
    {
        return self::ENDPOINT;
    }

    public function __construct(QrCode $qrCode)
    {
        $this->qrCode = $qrCode;
    }

    /** @inheritdoc */
    public function getRequestMethod(): string
    {
        return Gateway::REQUEST_METHOD_POST;
    }

    /** @inheritdoc */
    public function getPayload(): array
    {
        return $this->qrCode->toArray();
    }
}