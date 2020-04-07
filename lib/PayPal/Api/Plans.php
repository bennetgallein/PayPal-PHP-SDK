<?php
namespace PayPal\Api;

use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

class Plans extends PayPalResourceModel {

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function getProductId() {
        return $this->product_id;
    }

    public function setProductId($product_id) {
        $this->product_id = $product_id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\BillingCycle
     */
    public function getBillingCycles() {
        return $this->billing_cycles;
    }

    /**
     * set billing cycles
     *
     * @param \PayPal\Api\Plans\BillingCycle $cycles
     * @return void
     */
    public function setBillingCycles($cycles) {
        $this->billing_cycles = $cycles;
        return $this;
    }
 
    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\PaymentPreferences
     */
    public function getPaymentPreferences() {
        return $this->payment_preferences;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\Plans\PaymentPreferences $payment_preferences
     * @return void
     */
    public function setPaymentPreferences($payment_preferences) {
        $this->payment_preferences = $payment_preferences;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\Taxes
     */
    public function getTaxes() {
        return $this->taxes;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\Plans\Taxes $taxes
     * @return void
     */
    public function setTaxes($taxes) {
        $this->taxes = $taxes;
        return $this;
    }

    public function getQuantitySupported() {
        return $this->quantity_supported;
    }

    public function setQuantitySupported($quantity_supported) {
        $this->quantity_supported = $quantity_supported;
        return $this;
    }

    public function create($apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/plans/",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

}