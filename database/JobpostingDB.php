<?php

class JobpostingDB extends DatabaseModule
{
    private $JOBPOSTING_TABLE_NAME = 'jobpostings';
    private $JOB_LOCATION_TABLE_NAME = 'job_locations';

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
        $jobpostingTableName = $this->getPrefix() . $this->JOBPOSTING_TABLE_NAME;
        $jobLocationTableName = $this->getPrefix() . $this->JOBPOSTING_TABLE_NAME;
        $jobposting = $jobposting->toArray();

        // Start Transaction
        $wpdb->query("START TRANSACTION");

        $wpdb->insert($jobpostingTableName, $jobposting);
        $jobposting_id = $wpdb->insert_id;
        foreach ($jobposting['locations'] as $location) {
            $location['jobposting_id'] = $jobposting_id;
            $wpdb->insert($jobLocationTableName, $location);
        }

        // Commit the transaction
        $wpdb->query("COMMIT");



        return $wpdb->insert($tableName, $jobposting->toArray(false));
    }

}