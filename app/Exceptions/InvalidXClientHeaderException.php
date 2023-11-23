<?php

namespace App\Exceptions;

use Exception;

class InvalidXClientHeaderException extends Exception
{
    protected $code = 400;
    protected $message = 'Invalid X-Client header.';
}
