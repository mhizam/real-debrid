<?php

namespace RealDebrid;

use GuzzleHttp\ClientInterface;
use RealDebrid\Api\Downloads;
use RealDebrid\Api\Forum;
use RealDebrid\Api\Hosts;
use RealDebrid\Api\Settings;
use RealDebrid\Api\Torrents;
use RealDebrid\Api\Traffic;
use RealDebrid\Api\Unrestrict;
use RealDebrid\Api\User;
use RealDebrid\Auth\Token;

/**
 * A simple API interface for real-debrid.com
 *
 * It allows you to communicate with Real-Debrid API and do things like unrestrict your download links or add some torrent files
 * @package RealDebrid
 * @author Valentin GOT
 * @license MIT
 * @link http://api.real-debrid.com/ The Real-Debrid API documentation
 */
class RealDebrid {

    /**
     * @var User /user namespace
     */
    public $user;

    /**
     * @var Unrestrict /unrestrict namespace
     */
    public $unrestrict;

    /**
     * @var Traffic /traffic namespace
     */
    public $traffic;

    /**
     * @var Downloads /downloads namespace
     */
    public $downloads;

    /**
     * @var Torrents /torrents namespace
     */
    public $torrents;

    /**
     * @var Hosts /hosts namespace
     */
    public $hosts;

    /**
     * @var Forum /forum namespace
     */
    public $forum;

    /**
     * @var Settings /settings namespace
     */
    public $settings;

    /**
     * @var Token Access token
     */
    private $token;

    /**
     * @var \GuzzleHttp\Client Client interface for sending HTTP requests
     */
    private $client;

    /**
     * RealDebrid constructor.
     *
     * @param Token $token Access token
     * @param ClientInterface|null $client Client interface for sending HTTP requests
     */
    public function __construct(Token $token, ClientInterface $client = null) {
        $this->client = $client;
        if (is_null($client))
            $this->client = RealDebridHttpClient::make();
        $this->token = $token;

        $this->createWrappers();
    }

    /**
     * Creates the wrappers for all public properties and sets them
     */
    private function createWrappers() {
        $this->user = new User($this->token, $this->client);
        $this->unrestrict = new Unrestrict($this->token, $this->client);
        $this->traffic = new Traffic($this->token, $this->client);
        $this->downloads = new Downloads($this->token, $this->client);
        $this->torrents = new Torrents($this->token, $this->client);
        $this->hosts = new Hosts($this->token, $this->client);
        $this->forum = new Forum($this->token, $this->client);
        $this->settings = new Settings($this->token, $this->client);
    }
}