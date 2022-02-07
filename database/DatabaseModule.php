<?php

class DatabaseModule
{
    private $PREFIX = "jm_";

    public function __construct()
    {
    }

    public function getPrefix()
    {
        global $wpdb;
        return $wpdb->prefix . $this->PREFIX;
    }

    public function getCharset()
    {
        global $wpdb;
        return $wpdb->get_charset_collate();
    }

}