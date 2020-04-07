<?php
namespace PayPal\Api;

use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;

class Subscription extends PayPalResourceModel {

    public function getPlanId() {
        return $this->plan_id;
    }

    public function setPlanId($plan_id) {
        $this->plan_id = $plan_id;
        return $this;
    }

    public function getStartTime() {
        return $this->start_time;
    }

    public function setStartTime($start_time) {
        $this->start_time = $start_time;
        return $this;
    }
    
    public function getQuantity() {
        return $this->quantity;
    }

    public function setQuantity($quantity) {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\Plans\FixedPrice
     */
    public function getShippingAmount() {
        return $this->shipping_amount;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\Plans\FixedPrice $shipping_amount
     * @return void
     */
    public function setShippingAmount($shipping_amount) {
        $this->shipping_amount = $shipping_amount;
        return $this;
    }

    /**
     * Undocumented function
     *
     * @return \PayPal\Api\PayerInfo
     */
    public function getSubscriber() {
        return $this->subscriber;
    }

    /**
     * Undocumented function
     *
     * @param \PayPal\Api\PayerInfo $subscriber
     * @return void
     */
    public function setSubscriber($subscriber) {
        $this->subsriber = $subscriber;
        return $this;
    }

    public function getAutoRenewal() {
        return $this->auto_renewal;
    }

    public function setAutoRenewal($auto_renewal) {
        $this->auto_renewal = $auto_renewal;
        return $this;
    }

    public function getStatus() {
        return $this->status;
    }

    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    public function getStatusChangeNote() {
        return $this->status_change_note;
    }

    public function setStatusChangeNote($status_change_note) {
        $this->status_change_note = $status_change_note;
        return $this;
    }

    public function getStatusUpdateTime() {
        return $this->status_update_time;
    }

    public function setStatusUpdateTime($status_update_time) {
        $this->status_update_time = $status_update_time;
        return $this;
    }

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getBillingInfo() {
        return $this->billing_info;
    }

    public function setBillingInfo($billing_info) {
        $this->billing_info = $billing_info;
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

    public function getNote() {
        return $this->note;
    }

    public function setNote($note) {
        $this->note = $note;
        return $this;
    }

    public function getCaptureType() {
        return $this->capture_type;
    }

    public function setCaptureType($type) {
        $this->capture_type = $type;
        return $this;
    }

    public function getAmount() {
        return $this->amount;
    }

    public function setAmount($amount) {
        $this->amount = $amount;
        return $this;
    }

    public function getAmountWithBreakdown() {
        return $this->amount_with_breakdown;
    }

    public function getPayerName() {
        return $this->payer_name;
    }

    public function setPayerName($payer_name) {
        $this->payer_name;
        return $this;
    }

    public function getPayerEmail() {
        return $this->payer_email;
    }

    public function setPayerEmail($payer_email) {
        $this->payer_email = $payer_email;
        return $this;
    }

    public function getTime() {
        return $this->time;
    }

    public function setTime($time) {
        $this->time = $time;
        return $this;
    }
 
    public function getApprovalLink() {
        return $this->getLink(PayPalConstants::APPROVAL_URL);
    }

    public function create($apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions/",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

    public function patch($id, $apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions/${id}",
            "PATCH",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

    public function one($id, $apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions/${id}",
            "GET",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

    public function activate($id, $apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions/${id}/activate",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

    public function cancel($id, $apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions/${id}/cancel",
            "POST",
            $payLoad,
            null,
            $apiContext,
            $restCall
        );
        $this->fromJson($json);
        return $this;
    }

    public function capture($id, $apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/billing/subscriptions/${id}/capture",
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