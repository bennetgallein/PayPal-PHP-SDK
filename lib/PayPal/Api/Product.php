<?php
namespace PayPal\Api;

use PayPal\Common\PayPalResourceModel;
use PayPal\Core\PayPalConstants;
use PayPal\Rest\ApiContext;
use PayPal\Transport\PayPalRestCall;
use PayPal\Validation\ArgumentValidator;

class Product extends PayPalResourceModel {

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }
    
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type = "DIGITAL") {
        $this->type = $type;
        return $this;
    }

    public function getCategory() {
        return $this->category;
    }

    public function setCategory($category = "SOFTWARE") {
        $this->category = $category;
        return $this;
    }

    public function getImageUrl() {
        return $this->image_url;
    }

    public function setImageUrl($image_url) {
        $this->image_url = $image_url;
    }

    public function getHomeUrl() {
        return $this->home_url;
    }

    public function setHomeUrl($home_url) {
        $this->home_url = $home_url;
        return $this;
    }

    public function create($apiContext = null, $restCall = null) {
        $payLoad = $this->toJSON();
        $json = self::executeCall(
            "/v1/catalogs/products/",
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

