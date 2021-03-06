<?php

namespace RealDebrid\Exception;

/**
 * RealDebridException
 *
 * Handle Real-Debrid error codes
 * @package RealDebrid\Exception
 * @author Valentin GOT
 */
class RealDebridException extends \Exception {

    /**
     * Creates a new RealDebridException depending on the error_code
     *
     * @param \stdClass $error Real-Debrid error
     */
    public function __construct(\stdClass $error) {
        parent::__construct($this->getErrorMessage($error->error_code), $error->error_code);
    }

    private function getErrorMessage($code) {
        switch ($code) {
            case -1:
                return "Internal error";
                break;
            case 1:
                return "Missing parameter";
                break;
            case 2:
                return "Bad parameter value";
                break;
            case 3:
                return "Unknown method";
                break;
            case 4:
                return "Method not allowed";
                break;
            case 5:
                return "Slow down";
                break;
            case 6:
                return "Resource unreachable";
                break;
            case 7:
                return "Resource not found";
                break;
            case 8:
                return "Bad token";
                break;
            case 9:
                return "Permission denied";
                break;
            case 10:
                return "Authorization pending";
                break;
            case 11:
                return "Two-Factor authentication needed";
                break;
            case 12:
                return "Two-Factor authentication pending";
                break;
            case 13:
                return "Invalid login or password";
                break;
            case 14:
                return "Account locked";
                break;
            case 15:
                return "Account not activated";
                break;
            case 16:
                return "Unsupported hoster";
                break;
            case 17:
                return "Hoster in maintenance";
                break;
            case 18:
                return "Hoster limit reached";
                break;
            case 19:
                return "Hoster temporarily unavailable";
                break;
            case 20:
                return "Hoster not available for free users";
                break;
            case 21:
                return "Too many active downloads";
                break;
            case 22:
                return "IP Address not allowed";
                break;
            case 23:
                return "Traffic exhausted";
                break;
            case 24:
                return "File unavailable";
                break;
            case 25:
                return "Service unavailable";
                break;
            case 26:
                return "Upload too big";
                break;
            case 27:
                return "Upload error";
                break;
            case 28:
                return "File not allowed";
                break;
            case 29:
                return "Torrent too big";
                break;
            case 30:
                return "Torrent file invalid";
                break;
            case 31:
                return "Action already done";
                break;
            case 32:
                return "Image resolution error";
                break;
        }

        return "Unknown error";
    }
}