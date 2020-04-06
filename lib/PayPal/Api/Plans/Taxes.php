<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;

class Taxes extends PayPalModel {

    public function getPercentage() {
        return $this->percentage;
    }

    public function setPercentage($percentage) {
        $this->percentage = $percentage;
        return $this;
    }
    
    public function getInclusive() {
        return $this->inclusive;
    }

    public function setInclusive($inclusive) {
        $this->inclusive = $inclusive;
        return $this;
    }
}