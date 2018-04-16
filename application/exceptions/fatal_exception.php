<?php
namespace exceptions;


use base\exception_base;
use Throwable;

class fatal_exception extends exception_base
{
    function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        die((string)$message);
    }
}