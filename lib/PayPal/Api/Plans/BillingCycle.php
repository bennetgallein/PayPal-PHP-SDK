<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

class BillingCycle extends PayPalModel {

    public function getPricingScheme() {
        return $this->pricing_scheme;
    }

    public function setPricingScheme($scheme) {
        $this->pricing_scheme = $scheme;
        return $this;
    }

    public function getFrequency() {
        return $this->frequency;
    }

    public function setFrequency($frequency) {
        $this->frequency = $frequency;
        return $this;
    }

    public function getTenureType() {
        return $this->tenure_types;
    }

    public function setTenureType($type) {
        $this->tenure_type = $type;
        return $this;
    }
    
    public function getSequence() {
        return $this->sequence;
    }

    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    public function getTotalCycles() {
        return $this->total_cycles;
    }

    public function setTotalCycles($cycles) {
        $this->total_cycles = $cycles;
        return $this;
    } 
}