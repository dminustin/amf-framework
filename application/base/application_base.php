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
     * @var array
     */
    var $config = null;

    /**
     * Render class
     * @var null|\base\render_base
     */
    var $render = null;


    /**
     * @var null|\PDO
     */
    var $db = null;

    /**
     * application_base constructor.
     */
    function __construct()
    {
        //Load config file
        $this->loadConfig();
        $this->render = new render_base();

        if (!empty($this->config['db']['connection'])) {
            $this->db = new \PDO($this->config['db']['connection'], $this->config['db']['user'], $this->config['db']['pass']);
        }

    }

    protected function loadConfig()
    {
        $fname = BASE_PATH . "cache/config.json";
        $cname = APP_PATH . "config/local_config.php";

        if (!file_exists($cname)) {
            throw new \Exception("Local config {$cname} does not exists");
        }

        if (file_exists($fname) && filemtime($fname) >= filemtime($cname)) {
            $this->config = json_decode(file_get_contents($fname), true);
        } else {
            $this->config = (new \config\local_config())->getData();
            file_put_contents($fname, json_encode($this->config));
        }
    }

    /**
     * Requiring routing, then process request
     * @throws \exceptions\fatal_exception
     */
    public function run()
    {
        $filename = APP_PATH . 'config' . DIRECTORY_SEPARATOR . 'routing.php';
        if (!file_exists($filename)) {
            throw new fatal_exception('file application/config/routing.php not found');
        }
        require($filename);
    }


}