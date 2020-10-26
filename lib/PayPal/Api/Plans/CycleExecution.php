<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;

class CycleExecution extends PayPalModel {

    public function getTenureType() {
        return $this->tenure_type;
    }

    public function setTenureType($tenure_type) {
        $this->tenure_type = $tenure_type;
        return $this;
    }

    public function getSequence() {
        return $this->sequence;
    }

    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    public function getCyclesCompleted() {
        return $this->cycles_completed;
    }

    public function setCyclesCompleted($cycles_completed) {
        $this->cycles_completed;
        return $this;
    }

    public function getCyclesRemaining() {
        return $this->cycles_remaining;
    }

    public function setCyclesRemaining($cycles_remaining) {
        $this->cycles_remaining;
        return $this;
    }

    public function getCurrentPricingSchemeVersion() {
        return $this->current_pricing_scheme_version;
    }

    public function setCurrentPricingSchemeVersion($current_pricing_scheme_version) {
        $this->current_pricing_scheme_version = $current_pricing_scheme_version;
        return $this;
    }

    public function getTotalCycles() {
        return $this->total_cycles;
    }

    public function setTotalCycles($total_cycles) {
        $this->total_cyles = $total_cycles;
        return $this;
    }
}
