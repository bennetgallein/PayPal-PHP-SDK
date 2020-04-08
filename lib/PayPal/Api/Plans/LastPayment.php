<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;

class LastPayment extends PayPalModel {

    /**
     * Undocumented function
     *
     * @return PayPal\Api\Plans\FixedPrice;
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * Undocumented function
     *
     * @param PayPal\Api\Plans\FixedPrice $amount
     * @return void
     */
    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }
    
}