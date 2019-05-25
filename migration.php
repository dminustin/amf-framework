<?php
$type = array_pop($_SERVER['argv']);
if (!in_array($type, ['up', 'down'])) {
    echo "\n\nUsage php migration.php up|down\n\n";
    die();
}


require_once(__DIR__ . DIRECTORY_SEPARATOR . 'loader.php');
$migrations = glob('./application/migration/*.php');

foreach ($migrations as $migration) {
    $basename = 'migration\\' . explode('.', basename($migration))[0];

    /**
     * @var $class \migration\migration_template
     */
    $class = new $basename();

    echo $basename . ' ';
    if ($type == 'up') {
        echo ' up ';
        if (!$class->isExists()) {
            $result = $class->up();
            echo ($result) ? ' success ' : ' error ';
            if (!$result) {
                die();
            }
        }

        echo "\n";
    }


}
