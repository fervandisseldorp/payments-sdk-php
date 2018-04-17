<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 17-4-2018
 * Time: 11:20
 */

namespace CMPayments\PaymentSdk\Test\Request;


class MerchantRequestTest extends \PHPUnit_Framework_TestCase
{
    public function testGetEndpoint()
    {
        $r = new PaymentMethodsRequest();
        $this->assertEquals('merchants/v1', $r->getEndpoint());
    }

    public function testGetRequestMethod()
    {
        $r = new PaymentMethodsRequest();
        $this->assertEquals('GET', $r->getRequestMethod());
    }

    public function testGetPayload()
    {
        $r = new PaymentMethodsRequest();
        $this->assertEquals(null, $r->getPayload());
    }
}
