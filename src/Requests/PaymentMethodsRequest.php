<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 28-2-2018
 * Time: 09:23
 */

namespace CMPayments\PaymentSdk\Requests;


class PaymentMethodsRequest implements RequestInterface
{
    const ENDPOINT = 'payment_methods/v1';

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