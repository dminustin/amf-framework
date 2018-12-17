<?php
/**
 * Base exception
 */
namespace base;


use Throwable;

/**
 * Class exception_base
 * Base exception class
 *
 * @package base
 */
class exception_base extends \Exception
{
    /**
     * exception_base constructor.
     *
     * @param string          $message
     * @param int             $code
     * @param \Throwable|null $previous
     */
    function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        if (app()->config->debug) {
            parent::__construct($message, $code, $previous);
        } else {
            //Silence is gold
        }
    }
}