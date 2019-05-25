<?php
/**
 * Fatal exception base class
 */

namespace exceptions;


use base\exception_base;

/**
 * Class fatal_exception
 *
 * @package exceptions
 */
class fatal_exception extends exception_base
{
    /**
     * fatal_exception constructor.
     * Display error message and die
     *
     * @param string $message
     * @param int $code
     * @param \Throwable|null $previous
     */
    function __construct($message = "", $code = 0, \Throwable $previous = null)
    {
        die((string)$message);
    }
}