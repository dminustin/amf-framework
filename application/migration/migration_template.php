<?php
/**
 * Base migration class
 */
namespace migration;


/**
 * Class migration_template
 * You must extend this in your migration files
 *
 * @package migration
 */
class migration_template
{
    /**
     * Upgrade
     * @return bool
     */
    function up() {
        return true;
    }

    /**
     * Downgrade
     * @return bool
     */
    function down() {
        return true;
    }

    /**
     * Returns true if migration already applied
     * @return bool
     */
    function isExists() {
        return false;
    }

}