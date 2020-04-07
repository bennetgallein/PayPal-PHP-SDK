<?php
namespace PayPal\Api\Plans;

class ApplicationContext {

    public function getBrandName() {
        return $this->brand_name;
    }

    public function setBrandName($brand_name) {
        $this->brand_name = $brand_name;
        return $this;
    } 

    public function getLocale() {
        return $this->locales;
    }

    public function setLocale($locale) {
        $this->locale = $locale;
        return $this;
    }

    public function getShippingPreference() {
        return $this->shipping_preference;
    }

    public function setShippingPreference($shipping_preference) {
        $this->shipping_preference = $shipping_preference;
        return $this;
    }

    public function getUserAction() {
        return $this->user_action;
    }

    /**
     * Configures the label name to Continue or Subscribe Now for subscription consent experience. The possible values are:
     * CONTINUE. After you redirect the customer to the PayPal subscription consent page, a Continue button appears. Use this option when you want to control the activation of the subscription and do not want PayPal to activate the subscription.
     * SUBSCRIBE_NOW. After you redirect the customer to the PayPal subscription consent page, a Subscribe Now button appears. Use this option when you want PayPal to activate the subscription.
     * Default: SUBSCRIBE_NOW.
     * Minimum length: 1.
     * 
     * Maximum length: 24.
     *  Pattern: ^[A-Z_]+$.
     *
     * @param [type] $user_action
     * @return void
     */
    public function setUserAction($user_action) {
        $this->user_action = $user_action;
        return $this;
    }

    public function getReturnUrl() {
        return $this->return_url;
    }

    public function setReturnUrl($return_url) {
        $this->return_url = $return_url;
        return $this;
    }

    public function getCancelUrl() {
        return $this->cancel_url;
    }

    public function setCancelUrl($cancel_url) {
        $this->cancel_url = $cancel_url;
        return $this->cancel_url;
    }

}