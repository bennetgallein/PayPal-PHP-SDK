<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;

class FailedPayment extends PayPalModel {

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\FixedPrice;
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\Plans\FixedPrice $amount
     * @return void
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        $this->time = $time;
        return $this;
    }

    public function getReasonCode() {
        return $this->reason_code;
    }

    public function setReasonCode($reason_code) {
        $this->reason_code;
        return $this;
    }

    public function getNextPaymentRetryTime() {
        return $this->next_payment_retry_time;
    }

    public function setNextPaymentRetryTime($next_payment_retry_time) {
        $this->next_payment_retry_time = $next_payment_retry_time;
        return $this;
    }
}