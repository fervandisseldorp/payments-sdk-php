<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 17-4-2018
 * Time: 11:20
 */

namespace CMPayments\PaymentSdk\Test\Request;


use CMPayments\PaymentSdk\Requests\MerchantRequest;

class MerchantRequestTest extends \PHPUnit_Framework_TestCase
{
    public function testGetEndpoint()
    {
        $r = new MerchantRequest('ch-12345');
        $this->assertEquals('charges/v1/ch-12345/merchant', $r->getEndpoint());
    }

    public function testGetRequestMethod()
    {
        $r = new MerchantRequest();
        $this->assertEquals('GET', $r->getRequestMethod());
    }

    public function testGetPayload()
    {
        $r = new MerchantRequest();
        $this->assertEquals(null, $r->getPayload());
    }
}
