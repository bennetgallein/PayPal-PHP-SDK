<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

class FixedPrice extends PayPalModel {

    public function getCurrencyCode() {
        return $this->currency_code;
    }

    public function setCurrencyCode($currency_code) {
        $this->currency_code = $currency_code;
        return $this;
    }
    
    public function getValue() {
        return $this->value;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

}
