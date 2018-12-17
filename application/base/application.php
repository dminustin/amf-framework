<?php
/**
 * Application class
 */

namespace base;

/**
 * Class application
 * Custom realisation of base class
 *
 * @package base
 */
class application extends application_base
{
    /**
     * application_base constructor.
     */
    function __construct()
    {
        //Load config file
        if (file_exists(APP_PATH . 'config' . DIRECTORY_SEPARATOR . 'local_config.php')) {
            $this->config = new \config\local_config();
        } else {
            $this->config = new \config\default_config();
        }
        $this->render = new render();
    }
}