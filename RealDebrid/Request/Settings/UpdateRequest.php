<?php

namespace RealDebrid\Request\Settings;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * Class UpdateRequest
 *
 * @package RealDebrid\Request\Settings
 * @author Valentin GOT
 */
class UpdateRequest extends AbstractRequest {
    private $body = array();

    /**
     * Update a user setting
     *
     * @param Token $token
     * @param string $name Setting name
     * @param string $value Possible values are available in /settings
     */
    public function __construct(Token $token, $name, $value) {
        parent::__construct();

        $this->setToken($token);
        $body['setting_name'] = $name;
        $body['setting_value'] = $value;
    }

    public function getRequestType() {
        return RequestType::POST;
    }

    public function getUri() {
        return "settings/update";
    }

    public function getPostBody() {
        return $this->body;
    }
}