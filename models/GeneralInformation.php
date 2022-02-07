<?php

class GeneralInformation
{

    private $id;
    private $company_name;
    private $company_description;
    private $company_url;
    private $company_contact_name;
    private $company_contact_email;
    private $company_contact_phone;
    private $company_contact_fax;
    private $company_postalcode;
    private $company_city;
    private $company_streetaddress;
    private $company_country;
    private $created_at;
    private $updated_at;

    /**
     * Constructor for the GeneralInformation Database Class
     *
     * Params:
     * company_name, company_description, company_url, company_contact_name,
     * company_contact_email, company_contact_phone, company_contact_fax,
     * company_postalcode, company_city, company_streetaddress,
     * company_country, created_at, updated_at
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->company_name = isset($data['company_name']) ? $data['company_name'] : null;
        $this->company_description = isset($data['company_description']) ? $data['company_description'] : null;
        $this->company_url = isset($data['company_url']) ? $data['company_url'] : null;
        $this->company_contact_name = isset($data['company_contact_name']) ? $data['company_contact_name'] : null;
        $this->company_contact_email = isset($data['company_contact_email']) ? $data['company_contact_email'] : null;
        $this->company_contact_phone = isset($data['company_contact_phone']) ? $data['company_contact_phone'] : null;
        $this->company_contact_fax = isset($data['company_contact_fax']) ? $data['company_contact_fax'] : null;
        $this->company_postalcode = isset($data['company_postalcode']) ? $data['company_postalcode'] : null;
        $this->company_city = isset($data['company_city']) ? $data['company_city'] : null;
        $this->company_streetaddress = isset($data['company_streetaddress']) ? $data['company_streetaddress'] : null;
        $this->company_country = isset($data['company_country']) ? $data['company_country'] : null;
        $this->created_at = isset($data['created_at']) ? $data['created_at'] : null;
        $this->updated_at = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Returns the current values of the object as key->value array
     *
     * @param bool $withDates defines wether created_at and updated_at are added to the array
     * @return array|null[] the general information stored in the object
     */
    public function toArray(bool $withDates = true)
    {
        $generalInformation = [
            "id" => $this->id,
            "company_name" => $this->company_name,
            "company_description" => $this->company_description,
            "company_url" => $this->company_url,
            "company_contact_name" => $this->company_contact_name,
            "company_contact_email" => $this->company_contact_email,
            "company_contact_phone" => $this->company_contact_phone,
            "company_contact_fax" => $this->company_contact_fax,
            "company_postalcode" => $this->company_postalcode,
            "company_city" => $this->company_city,
            "company_streetaddress" => $this->company_streetaddress,
            "company_country" => $this->company_country,
        ];
        if ($withDates) {
            $generalInformation = array_merge($generalInformation, [
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
            ]);
        }
        return $generalInformation;
    }

}