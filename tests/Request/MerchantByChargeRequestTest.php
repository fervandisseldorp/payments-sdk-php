<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 17-4-2018
 * Time: 11:20
 */

namespace CMPayments\PaymentSdk\Test\Request;


use CMPayments\PaymentSdk\Requests\MerchantByChargeRequest;

class MerchantByChargeRequestTest extends \PHPUnit_Framework_TestCase
{
    public function testGetEndpoint()
    {
        $r = new MerchantByChargeRequest('ch-12345');
        $this->assertEquals('charges/v1/ch-12345/merchant', $r->getEndpoint());
    }

    public function testGetRequestMethod()
    {
        $r = new MerchantByChargeRequest();
        $this->assertEquals('GET', $r->getRequestMethod());
    }

    public function testGetPayload()
    {
        $r = new MerchantByChargeRequest();
        $this->assertEquals(null, $r->getPayload());
    }
}
