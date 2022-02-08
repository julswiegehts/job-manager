<?php
require_once(plugin_dir_path(__FILE__) . 'DatabaseHelper.php');

class Migrations
{

    public static function createGeneralInformationTable()
    {
        global $wpdb;

        $table_name = DatabaseHelper::getPrefix() . "general_information";
        $charset_collate = DatabaseHelper::getCharset();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            company_name LONGTEXT,
            company_description LONGTEXT,
            company_url LONGTEXT,
            company_contact_name LONGTEXT,
            company_contact_email LONGTEXT,
            company_contact_phone LONGTEXT,
            company_contact_fax LONGTEXT,
            company_postalcode LONGTEXT,
            company_city LONGTEXT,
            company_streetaddress LONGTEXT,
            company_country LONGTEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP ,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY  (id)
	    ) $charset_collate;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        $wpdb->query($sql);
    }

    public static function createJobpostingTable()
    {
        global $wpdb;

        $table_name = DatabaseHelper::getPrefix() . "jobpostings";
        $charset_collate = DatabaseHelper::getCharset();

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            referencenumber LONGTEXT,
            title LONGTEXT,
            description LONGTEXT,
            category LONGTEXT,
            salary LONGTEXT,
            type LONGTEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP ,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY  (id)
	    ) $charset_collate;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        $wpdb->query($sql);
    }

    public static function createJobLocationTable()
    {
        global $wpdb;

        $table_name = DatabaseHelper::getPrefix() . "job_locations";
        $jobpostings_table_name = DatabaseHelper::getPrefix() . "jobpostings";
        $charset_collate = DatabaseHelper::getCharset();

        echo "HIER BIN ICH";

        $sql = "CREATE TABLE IF NOT EXISTS $table_name (
            id mediumint(9) NOT NULL AUTO_INCREMENT,
            jobposting_id mediumint(9) NOT NULL,
            postalcode LONGTEXT,
            city LONGTEXT,
            state LONGTEXT,
            country LONGTEXT,
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP ,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            FOREIGN KEY (jobposting_id) REFERENCES $jobpostings_table_name(id) 
	    ) $charset_collate;";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');

        $wpdb->query($sql);

    }

}