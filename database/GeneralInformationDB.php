<?php
require_once( plugin_dir_path(__FILE__) . 'DatabaseModule.php');

class GeneralInformationDB extends DatabaseModule
{

    private $TABLE_NAME = 'general_information';

    public function __construct()
    {
    }

    /**
     * Given a GeneralInformation object, it stores the data of the object into the database as new row
     *
     * @param GeneralInformation $generalInformation
     * @return bool|int|mysqli_result|resource|null
     */
    public function storeOneGeneralInformation(GeneralInformation $generalInformation)
    {
        global $wpdb;
        $tableName = $this->getPrefix() . $this->TABLE_NAME;
        return $wpdb->insert($tableName, $generalInformation->toArray(false));
    }

}