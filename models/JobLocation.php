<?php

class JobLocation
{

    private $id;
    private $postalcode;
    private $city;
    private $state;
    private $country;
    private $created_at;
    private $updated_at;


    /**
     * Constructor for the Location Database Class
     *
     * Params:
     * postalcode, city, state, country, created_at, updated_at
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->postalcode = isset($data['postalcode']) ? $data['postalcode'] : null;
        $this->city = isset($data['city']) ? $data['city'] : null;
        $this->state = isset($data['state']) ? $data['state'] : null;
        $this->country = isset($data['country']) ? $data['country'] : null;
        $this->created_at = isset($data['created_at']) ? $data['created_at'] : null;
        $this->updated_at = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * Returns the current values of the object as key->value array
     *
     * @param bool $withDates defines wether created_at and updated_at are added to the array
     * @return array|null[] the location data stored in the object
     */
    public function toArray(bool $withDates = true)
    {
        $location = [
            "id" => $this->id,
            "postalcode" => $this->postalcode,
            "city" => $this->city,
            "state" => $this->state,
            "country" => $this->country
        ];
        if ($withDates) {
            $location = array_merge($location, [
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
            ]);
        }
        return $location;
    }


}