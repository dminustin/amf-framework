<?php


class application
{
    /**
     * @var \config\default_config|null
     */
    var $config = null;

    /**
     * @var null|\base\render_base
     */
    var $render = null;
    function __construct()
    {
        //Load config file
        if (file_exists(APP_PATH . 'config' . DIRECTORY_SEPARATOR . 'local_config.php')) {
            $this->config = new \config\local_config();
        } else {
            $this->config = new \config\default_config();
        }
    }

    public function run() {
        $filename = APP_PATH . 'config' . DIRECTORY_SEPARATOR . 'routing.php';
        if (!file_exists($filename)) {

        }
    }

    public function error403() {
        return $this->render->render('_default/error_403');
    }

    public function error404() {
        return $this->render->render('_default/error_404');
    }

    public function error405() {
        return $this->render->render('_default/error_405');
    }
}