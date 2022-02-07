<?php

class DatabaseHelper
{

    public static function getPrefix()
    {
        global $wpdb;
        return $wpdb->prefix . "jm_";
    }

    public static function getCharset()
    {
        global $wpdb;
        return $wpdb->get_charset_collate();
    }

}