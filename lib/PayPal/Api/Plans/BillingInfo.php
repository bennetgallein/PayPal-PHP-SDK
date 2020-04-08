<?php
namespace PayPal\Api\Plans;

use PayPal\Common\PayPalModel;

class BillingInfo extends PayPalModel {

    /**
     * Undocumented function
     *
     * @return PayPal\Api\Plans\FixedPrice
     */
    public function getOutstandingBalance() {
        return $this->outstanding_balance;
    }

    /**
     * Undocumented function
     *
     * @param PayPal\Api\Plans\FixedPrice $outstanding_balance
     * @return void
     */
    public function setOutstandingBalance($outstanding_balance) {
        $this->outstanding_balance = $outstanding_balance;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\BillingCycle
     */
    public function getCycleExecutions() {
        return $this->cycle_executions;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\Plans\BillingCycle $cycle_executions
     * @return void
     */
    public function setCycleExecutions($cycle_executions) {
        $this->cycle_executions = $cycle_executions;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\LastPayment
     */
    public function getLastPayment() {
        return $this->last_payment;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\Plans\LastPayment $last_payment
     * @return void
     */
    public function setLastPayment($last_payment) {
        $this->last_payment = $last_payment;
        return $this;
    }

    public function getNexBillingTime() {
        return $this->next_billing_time;
    }

    public function setNextBillingTime($next_billing_time) {
        $this->next_billing_time = $next_billing_time;
        return $this;
    }

    public function getFinalPaymentTime() {
        return $this->final_payment_time;
    }

    public function setFinalPaymentTime($final_payment_time) {
        $this->final_payment_time = $final_payment_time;
        return $this;
    }

    public function getFailedPaymentsCount() {
        return $this->failed_payments_count;
    }

    public function setFailedPaymentsCount($failed_payments_count) {
        $this->failed_payments_count = $failed_payments_count;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\FailedPayment
     */
    public function getLastFailedPayment() {
        return $this->last_failed_payment;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\Plans\FailedPayment $last_failed_payment
     * @return void
     */
    public function setLastFailedPayment($last_failed_payment) {
        $this->last_failed_payment = $last_failed_payment;
        return $this;
    }
}