<?php
require_once(plugin_dir_path(__FILE__) . '../models/GeneralInformation.php');
require_once(plugin_dir_path(__FILE__) . 'GeneralInformationDB.php');


class Seeder
{

    /**
     * Stores an initial value in the general_information database
     *
     * @return bool|int|mysqli_result|resource|null
     */
    public static function general_information_seeder()
    {

        // Create general Information start value
        $generlInformation = new GeneralInformation([
            "company_name" => 'Juls Wie Gehts corp.',
            "company_description" => 'Mir fällt gerade keine Beschreibung ein',
            "company_url" => 'https://example.org',
            "company_contact_name" => 'Juls Wie Gehts',
            "company_contact_email" => 'julswiegehts@example.org',
            "company_contact_phone" => '+49 123 4568678',
            "company_contact_fax" => null,
            "company_postalcode" => '12345',
            "company_city" => 'Example',
            "company_streetaddress" => 'Hintern Baum 12',
            "company_country" => 'Deutschland'
        ]);
        $generlInformationDB = new GeneralInformationDB();
        return $generlInformationDB->storeOneGeneralInformation($generlInformation);

    }

}