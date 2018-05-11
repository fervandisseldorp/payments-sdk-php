<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 17-4-2018
 * Time: 11:22
 */

namespace CMPayments\PaymentSdk\Requests;

// Not sure if this request should be available for everyone to use.
class MerchantByChargeRequest implements RequestInterface
{
    private $charge_id;

    public function __construct($charge_id)
    {
        $this->charge_id = $charge_id;
    }

    public function getEndpoint()
    {
        return 'charges/v1/' . $this->charge_id . '/merchant';
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