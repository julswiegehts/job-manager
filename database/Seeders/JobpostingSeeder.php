<?php

class JobpostingSeeder
{

    public function seedRandomJobpostings($count = 18)
    {

    }

    public function getRandomJobposting(int $locationCount = -1)
    {
        if ($locationCount < 0) {
            $locationCount = rand(1, 4);
        }
        $locations = [];
        foreach (range(1, $locationCount) as $i) {
            $locations[] = $this->getRandomLocation();
        }
        $jobposting = new Jobposting([
            'referencenumber' => 'ref' . rand(0, 100000),
            'title' => HELPME::getRandomSentence(),
            'description' => HELPME::getRandomHtml(),
            'category' => array_rand(['IT', 'Kaufmännischer Bereich', 'Handwerk', 'Back-Office']),
            'salary' => "".rand(21, 75).".000 Euro / Jahr",
            'type' => array_rand(['Vollzeit', 'Teilzeit', '450 Euro Basis'])
        ], $locations);
        return $jobposting;
    }

    private function getRandomLocation()
    {
        return new JobLocation([
            'postalcode' => rand(10000, 99999),
            'city' => array_rand(['München', 'Ulm', 'Stuttgart', 'Berlin', 'Hamburg', 'Augsburg', 'Köln']),
            'state' => array_rand(['Bayern', 'Sachsen', 'Berlin']),
            'country' => 'Deutschland'
        ]);
    }

}