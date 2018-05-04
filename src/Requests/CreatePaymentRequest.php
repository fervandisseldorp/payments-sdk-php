<?php
/**
 * Created by PhpStorm.
 * User: ferdinand.vandisseld
 * Date: 3-5-2018
 * Time: 10:58
 */

namespace CMPayments\PaymentSdk\Requests;


use CMPayments\PaymentSdk\Entities\Payment;
use CMPayments\PaymentSdk\Gateway;

class CreatePaymentRequest implements RequestInterface
{
    /**
     * Default endpoint (Uri in Guzzle context)
     */
    const ENDPOINT = 'payments/v1';

    /**
     * @var chargeID
     */
    private $chargeID;
    /**
     * @var payment
     */
    private $payment;

    /**
     * CreatePaymentRequest constructor.
     */
    public function __construct($chargeID, Payment $payment)
    {
        $this->chargeID = $chargeID;
        $this->payment = $payment;
    }

    /**
     * Return the uri
     *
     * @return string The uri
     */
    public function getEndpoint()
    {
        return self::ENDPOINT;
    }

    /**
     * Return request method
     *
     * @return string This is the request type
     */
    public function getRequestMethod()
    {
        return Gateway::REQUEST_METHOD_POST;
    }


    /**
     * Retrieve the whole request
     *
     * @return string[] The complete request
     */
    public function getPayload()
    {
        $array = [
            'charge_id'     => $this->chargeID
        ];
        $paymentArray = $this->payment->toArray();
        return array_merge($array, $paymentArray);
    }
}