<?php

namespace RealDebrid\Api;
use RealDebrid\Request\Hosts\DomainsRequest;
use RealDebrid\Request\Hosts\HostsRequest;
use RealDebrid\Request\Hosts\RegexRequest;
use RealDebrid\Request\Hosts\StatusRequest;

/**
 * /hosts namespace
 *
 * Provides a set of methods to checkout the supported hosts, their status, ...
 * @package RealDebrid\Api
 * @author Valentin GOT
 * @license MIT
 * @api
 */
class Hosts extends EndPoint {

    /**
     * Get supported hosts
     *
     * @return \stdClass Supported hosts
     */
    public function get() {
        return $this->request(new HostsRequest());
    }

    /**
     * Get status of supported hosters or not and their status on competitors
     *
     * @return \stdClass Supported hosters status
     */
    public function status() {
        return $this->request(new StatusRequest($this->token));
    }

    /**
     * Get all supported links Regex, useful to find supported links inside a document
     *
     * @return array Supported links regex
     */
    public function regex() {
        return $this->request(new RegexRequest($this->token));
    }

    /**
     * Get all hoster domains supported on the service
     *
     * @return array All hoster domains
     */
    public function domains() {
        return $this->request(new DomainsRequest($this->token));
    }
}