<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 1-6-2018
 * Time: 13:07
 */

namespace CMPayments\PaymentSdk\Requests;


class IdealQrRequest
{
    /** @inheritdoc */
    public function getEndpoint()
    {
        return 'qr/v1';
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