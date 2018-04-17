<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 17-4-2018
 * Time: 11:22
 */

namespace CMPayments\PaymentSdk\Requests;


class MerchantRequest implements RequestInterface
{
    const ENDPOINT = 'merchants/v1';

    public function getEndpoint()
    {
        return self::ENDPOINT;
    }

    public function getRequestMethod()
    {
        return 'GET';
    }

    public function getPayload()
    {
        return null;
    }
}