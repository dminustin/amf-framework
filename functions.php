<?php

/**
 * @return \application
 */
function app() {
    static $app = null;
    if (is_null($app)) {
        $name = APPLICATION_CLASS;
        return $app = new $name();
    }
    return $app;
}
