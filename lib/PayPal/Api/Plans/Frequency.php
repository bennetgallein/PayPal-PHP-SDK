<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

class Frequency extends PayPalModel {

    public function getIntervalUnit() {
        return $this->interval_unit;
    }

    public function setIntervalUnit($interval_unit) {
        $this->interval_unit = $interval_unit;
        return $this;
    }

    public function getIntervalCount() {
        return $this->interval_count;
    }

    public function setIntervalCount($interval_count) {
        $this->interval_count = $interval_count;
        return $this;
    }
}