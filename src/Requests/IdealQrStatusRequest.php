<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 1-6-2018
 * Time: 13:13
 */

namespace CMPayments\PaymentSdk\Requests;


class IdealQrStatusRequest implements RequestInterface
{
    private $qrId;

    public function __construct(string $qrId)
    {
        $this->qrId = $qrId;
    }


    /** @inheritdoc */
    public function getEndpoint()
    {
        return 'qr/v1/status/' . $this->qrId;
    }

    /** @inheritdoc */
    public function getRequestMethod()
    {
        return 'GET';
    }

    /** @inheritdoc */
    public function getPayload()
    {
        return null;
    }

}