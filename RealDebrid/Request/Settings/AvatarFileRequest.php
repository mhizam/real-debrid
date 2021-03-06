<?php

namespace RealDebrid\Request\Settings;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * PUT /settings/avatarFile
 *
 * Upload a new user avatar image
 * @package RealDebrid\Request\Settings
 * @author Valentin GOT
 */
class AvatarFileRequest extends AbstractRequest {

    /**
     * Upload a new user avatar image
     *
     * @param Token $token Access token
     * @param string $path File to the avatar file
     */
    public function __construct(Token $token, $path) {
        parent::__construct();

        $this->setToken($token);
        $this->setFilePath($path);
    }

    public function getRequestType() {
        return RequestType::PUT;
    }

    public function getUri() {
        return "settings/avatarFile";
    }
}