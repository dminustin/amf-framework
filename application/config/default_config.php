<?php
/**
 * Default config class
 * do not edit
 * use local_config.php instead
 */

namespace config;

/**
 * Class default_config
 * Simple class to store config data
 *
 * @package config
 */
class default_config
{
    /**
     * Set to true if you want to debug
     * @var bool
     */
    static $debug = true;

    /**
     * use cache for twig
     * @var bool
     */
    static $twig_cache = true;

    static $db = [
        "connection" => "",
        "user" => "",
        "pass" => ""
    ];


    /**
     * Call this funciton to get all config data
     * @return array
     */
    function getData()
    {
        $result = [];
        foreach (get_class_vars(get_called_class()) as $k => $v) {
            $result[$k] = $v;
        }
        return $result;
    }


}