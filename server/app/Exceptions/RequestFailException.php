<?php


namespace App\Exceptions;

use Exception;

class RequestFailException extends Exception
{
    public function __construct($errorCode, $message = null)
    {
        parent::__construct($message, $errorCode);
    }
}