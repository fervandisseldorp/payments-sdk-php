<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 17-4-2018
 * Time: 11:22
 */

namespace CMPayments\PaymentSdk\Requests;

// Not sure if this request should be available for everyone to use.
class MerchantRequest implements RequestInterface
{
    private $charge_id;

    public function __construct($chargeId)
    {
        $this->chargeId = $chargeId;
    }

    public function getEndpoint()
    {
        return 'charges/v1/ ' . $this->charge_id . '/merchant';
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