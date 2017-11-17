<?php

class Datasource_Sponsor
{

    //is this the same as protected $sponsorNames = array();?
    protected $sponsorNames = [
        'New and Upcoming Startup',
        'Average Company Ltd.',
        'Super Duper Cool Best Company Ever',
        'Marks amazing business'
    ];

    public function getSponsors()
    {

        $sponsorList = []; //means an array will always be returned, and not an error
        foreach ($this->sponsorNames as $sponsorNamez) {
            $sponso = new Sponsor();
            $sponso->setTitle($sponsorNamez);
            $sponsorList[] = $sponso;
        }

        return $sponsorList;

    }

    public function addSponsor($string)
    {
        //@todo allow this function to take in a sponsor name and add it to the object array
        //do I need THIS function???

//        $array[] = $value;
        $this->sponsorNames[] = $string;



        //array_push($newItem);

    }

}