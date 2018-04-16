<?php

namespace base;


use Throwable;

class exception_base extends \Exception
{
    function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        if (app()->config->debug) {
            parent::__construct($message, $code, $previous);
        } else {
            //Silence is gold
        }
    }
}