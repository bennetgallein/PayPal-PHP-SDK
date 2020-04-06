<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

class PricingScheme extends PayPalModel {

    public function getVersion() {
        return $this->version;
    }

    public function setVersion($version) {
        $this->version = $version;
        return $this;
    }

    public function getFixedPrice() {
        return $this->fixed_price;
    }

    public function setFixedPrice($fixed_price) {
        $this->fixed_price = $fixed_price;
        return $this;
    }

    public function getCreateTime() {
        return $this->create_time;
    }

    public function setCreateTime($create_time) {
        $this->create_time = $create_time;
        return $this;
    }

    public function getUpdateTime() {
        return $this->update_time;
    }

    public function setUpdateTime($update_time) {
        $this->update_time = $update_time;
        return $this;
    }
}