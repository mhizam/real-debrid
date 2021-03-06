<?php

namespace RealDebrid\Request\Settings;
use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * POST /settings/convertPoints
 *
 * Convert fidelity points
 * @package RealDebrid\Request\Settings
 * @author Valentin GOT
 */
class ConvertPointsRequest extends AbstractRequest {

    /**
     * Convert fidelity points
     *
     * @param Token $token Access token
     */
    public function __construct(Token $token) {
        parent::__construct();

        $this->setToken($token);
    }

    public function getRequestType() {
        return RequestType::POST;
    }

    public function getUri() {
        return "settings/convertPoints";
    }
}