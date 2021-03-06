<?php

namespace RealDebrid\Request\Torrents;

use RealDebrid\Auth\Token;
use RealDebrid\Request\AbstractRequest;
use RealDebrid\Request\RequestType;

/**
 * POST /torrents/selectFiles/{id}
 *
 * Select files of a torrent to start it
 * @package RealDebrid\Request\Torrents
 * @author Valentin GOT
 */
class SelectFilesRequest extends AbstractRequest {
    private $id;

    /**
     * Select files of a torrent to start it
     *
     * Warning: To get file IDs, use /torrents/info/{id}
     * @param Token $token Access token
     * @param string $id Torrent ID
     * @param array $files Array of selected files IDs
     */
    public function __construct(Token $token, $id, array $files) {
        parent::__construct();

        $this->setToken($token);
        $this->id = $id;
        $this->addToBody('files', (count($files) > 0) ? implode(',', $files) : 'all');
    }

    public function getId() {
        return $this->id;
    }

    public function getRequestType() {
        return RequestType::POST;
    }

    public function getUri() {
        return "torrents/selectFiles/:id";
    }
}