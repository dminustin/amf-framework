<?php

namespace base;


class render_base
{
    protected $vars = [];

    function __get($name)
    {
        return $this->vars[$name];
    }

    function __set($name, $value)
    {
        $this->vars[$name] = $value;
    }


    /**
     * @param       $view
     * @param array $vars
     * @param bool|int  $return_http_code
     */
    function render($view, $vars = [], $return_http_code = false) {
        if ($return_http_code) {
            http_response_code($return_http_code);
        }
        $filename = APP_PATH . 'views' . DIRECTORY_SEPARATOR . $view . '.php';
        if (!file_exists($filename)) {
            $error_file = $filename;
            $filename = APP_PATH . 'views' . DIRECTORY_SEPARATOR . '_default' . DIRECTORY_SEPARATOR . 'no_view_file.php';
            require($filename);
            return;
        }
        extract($vars);
        require($filename);
    }

}