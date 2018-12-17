<?php
/**
 * Render class
 * Extends base render class
 */

namespace base;

/**
 * Class render
 * Custom realization of render class
 *
 * @package base
 */
class render extends render_base
{
    /**
     * @var null|\Twig_Environment twig object
     */
    protected $twig = null;

    /**
     * render constructor.
     */
    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(APP_PATH . 'views');
        $this->twig = new \Twig_Environment($loader, array(
            //'cache' => BASE_PATH . 'cache',
            'cache' => false,
        ));
    }

    /**
     * Render the template
     * @param       $view
     * @param array $vars
     * @param bool  $return_http_code
     *
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function render($view, $vars = [], $return_http_code = false)
    {
        $template = $this->twig->load($view . '.html.twig');
        echo $template->render($vars);
    }
}