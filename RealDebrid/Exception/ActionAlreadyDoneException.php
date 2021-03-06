<?php

namespace RealDebrid\Exception;

/**
 * ActionAlreadyDoneException
 *
 * The action has already been done. HTTP Status Code: 202
 * @package RealDebrid\Exception
 * @author Valentin GOT
 */
class ActionAlreadyDoneException extends \Exception {
    protected $message = 'Action already done';
}