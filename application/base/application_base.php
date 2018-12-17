<?php
/**
 * Base application class
 */
namespace base;

use exceptions\fatal_exception;

/**
 * Class application_base
 *
 * @package base
 */
class application_base
{
    /**
     * Config class
     * @var \config\default_config|null
     */
    var $config = null;

    /**
     * Render class
     * @var null|\base\render_base
     */
    var $render = null;

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
        $this->render = new render_base();
    }

    /**
     * Requiring routing, then process request
     * @throws \exceptions\fatal_exception
     */
    public function run() {
        $filename = APP_PATH . 'config' . DIRECTORY_SEPARATOR . 'routing.php';
        if (!file_exists($filename)) {
            throw new fatal_exception('file application/config/routing.php not found');
        }
        require($filename);
    }


}