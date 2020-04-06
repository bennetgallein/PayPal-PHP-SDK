<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;
use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

class PaymentPreferences extends PayPalModel {

    public function getAutoBillOutstanding() {
        return $this->auto_bill_outstanding;
    }

    public function setAutoBillOutstanding($auto_bill_outstanding) {
        $this->auto_bill_outstanding = $auto_bill_outstanding;
        return $this;
    }

    public function getSetupFee() {
        return $this->setup_fee;
    }

    public function setSetupFee($setup_fee) {
        $this->setup_fee = $setup_fee;
        return $this;
    }

    public function getSetupFeeFailureAction() {
        return $this->setup_fee_failure_action;
    }

    /**
     * @oneof ('CONTINUE' OR 'CANCEL') DEFAULT = CANCEL
     */
    public function setSetupFeeFailureAction($action) {
        $this->setup_fee_failure_action = $action;
        return $this;
    }

}