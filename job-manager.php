<?php
/**
 * Plugin Name: julswiegehts Job Manager
 * Plugin URI: http://www.example.com/my-first-plugin
 * Description: Job and career management tool
 * Version: 1.0
 * Author: Julian
 * Author URI: http://www.example.com
 */
include_once(plugin_dir_path(__FILE__) . 'database/Migrations.php');
include_once(plugin_dir_path(__FILE__) . 'database/Seeder.php');
include_once(plugin_dir_path(__FILE__) . 'helpers/HELPME.php');

function activate_job_manager()
{
    HELPME::addToLog("Aktiviere Plugin");
    HELPME::addToLog("Erstelle general information Datenbank");
    Migrations::createGeneralInformationTable();
    if (Seeder::general_information_seeder()) {
        HELPME::addToLog("Erfolgreich geseeded");
    } else {
        HELPME::addToLog("Seeding general information fehlgeschlagen");
    }
    HELPME::addToLog("Plugin aktiviert");
}
register_activation_hook(__FILE__, 'activate_job_manager');

function deactivate_job_manager()
{
    HELPME::addToLog("Plugin wurde deaktiviert");
}
register_deactivation_hook(__FILE__, 'deactivate_job_manager');
