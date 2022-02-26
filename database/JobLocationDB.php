<?php

class JobLocationDB extends DatabaseModule
{
    private $TABLE_NAME = 'job_locations';

    public function __construct()
    {
    }

    /**
     * Given a GeneralInformation object, it stores the data of the object into the database as new row
     *
     * @param GeneralInformation $generalInformation
     * @return bool|int|mysqli_result|resource|null
     */
    public function storeJobposting(Jobposting $jobposting)
    {
        global $wpdb;
        $tableName = $this->getPrefix() . $this->TABLE_NAME;
        return $wpdb->insert($tableName, $jobposting->toArray(false));
    }
}