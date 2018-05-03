<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 3-5-2018
 * Time: 11:02
 */

namespace CMPayments\PaymentSdk\Test\Request;

use CMPayments\PaymentSdk\Entities\Payment;
use CMPayments\PaymentSdk\Requests\CreatePaymentRequest;

class CreatePaymentRequestTest extends \PHPUnit_Framework_TestCase
{

    private function getPayment($money)
    {
        // Should add chargeID to the implementation whenever anyone has time. We'll see.
        return new Payment( $money, 'test', '12345' );
    }

    public function testGetEndpoint()
    {
        $r = new CreatePaymentRequest($this->getPayment() );
        $this->assertEquals('payments/v1', $r->getEndpoint());
    }

    public function testGetRequestMethod()
    {
        $r = new CreateChargeRequest($this->getPayment());
        $this->assertEquals('POST', $r->getRequestMethod());
    }

    public function testGetPayload()
    {
        $r = new CreatePaymentRequest($this->getPayment() );
        $p = $r->getPayload();

        $this->assertInternalType('array', $p);
        $this->assertEquals('5.00', $p['amount']);
        $this->assertEquals('EUR', $p['currency']);
        $this->assertEquals(1, count($p['payments']));
    }
}
