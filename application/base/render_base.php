<?php
/**
 * Base render class
 */

namespace base;

/**
 * Class render_base
 *
 * @package base
 */
class render_base
{
    /**
     * contains any vars used in template
     *
     * @var array
     */
    protected $vars = [];

    /**
     * Getter method
     * Get the template value
     *
     * @param $name
     *
     * @return mixed
     */
    function __get($name)
    {
        return $this->vars[$name];
    }

    /**
     * Setter method
     * Set the template value
     *
     * @param $name
     * @param $value
     */
    function __set($name, $value)
    {
        $this->vars[$name] = $value;
    }

    /**
     * Render error page
     * Error page
     * @param int $error error code
     * @return void
     */
    function errorPage($error)
    {
        header('HTTP/1.0 ' . $error);
        $this->render('_default/error_page', ['error' => $error]);
    }

    /**
     * Render the template
     *
     * @param          $view
     * @param array $vars
     * @param bool|int $return_http_code
     */
    function render($view, $vars = [], $return_http_code = false)
    {
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