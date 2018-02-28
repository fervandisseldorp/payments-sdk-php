<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 28-2-2018
 * Time: 09:59
 */

namespace CMPayments\PaymentSdk\Test\Request;

use CMPayments\PaymentSdk\Requests\PaymentMethodsRequest;
use Faker\Provider\Payment;

class PaymentMethodsRequestTest extends \PHPUnit_Framework_TestCase
{

    public function testGetEndpoint()
    {
        $r = new PaymentMethodsRequest();
        $this->assertEquals('payment_methods/v1', $r->getEndpoint());
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
