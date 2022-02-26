<?php

class Jobposting
{

    private $id;
    private $referencenumber;
    private $title;
    private $description;
    private $category;
    private $salary;
    private $type;
    private $created_at;
    private $updated_at;
    private $locations;

    /**
     * Constructor for the Jobposting Database Class
     *
     * Params:
     * referencenumber, title, description, category, salary, type, created_at, updated_at,
     *
     * @param array $data
     */
    public function __construct(array $data, $locations)
    {
//        $this-> = isset($data['']) ? $data[''] : null;

        $this->id = isset($data['id']) ? $data['id'] : null;
        $this->referencenumber = isset($data['referencenumber']) ? $data['referencenumber'] : null;
        $this->title = isset($data['title']) ? $data['title'] : null;
        $this->description = isset($data['description']) ? $data['description'] : null;
        $this->category = isset($data['category']) ? $data['category'] : null;
        $this->salary = isset($data['salary']) ? $data['salary'] : null;
        $this->type = isset($data['type']) ? $data['type'] : null;
        $this->created_at = isset($data['created_at']) ? $data['created_at'] : null;
        $this->updated_at = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->locations = $locations;
    }

    /**
     * Returns the current values of the object as key->value array
     *
     * @param bool $withDates defines wether created_at and updated_at are added to the array
     * @return array|null[] the jobposting stored in the object
     */
    public function toArray(bool $withDates = true)
    {
        $jobposting = [
            "id" => $this->id,
            "referencenumber" => $this->referencenumber,
            "title" => $this->title,
            "description" => $this->description,
            "category" => $this->category,
            "salary" => $this->salary,
            "type" => $this->type,
            "locations" => $this->locationsToArray()
        ];
        if ($withDates) {
            $jobposting = array_merge($jobposting, [
                "created_at" => $this->created_at,
                "updated_at" => $this->updated_at,
            ]);
        }
        return $jobposting;
    }

    /**
     * Coonverts every Location object from the Locations into a key->value array
     *
     * @return array of locations
     */
    private function locationsToArray(bool $withDates = true)
    {
        // TODO: map to get locations as array instead of class (using the toArray Class from location)
        $locations = [];
        foreach ($this->locations as $location) {
            array_push($locations, $location->toArray($withDates));
        }
        return $locations;
    }

}