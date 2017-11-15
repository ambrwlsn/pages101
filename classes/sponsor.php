<?php

//require ('page.php');

class Sponsor extends Page
{
    protected $sponsorList;

    public function getSponsor()
    {
        return $this->sponsorList;
    }

    //this function allows the date from the News class to be altered elsewhere
    public function setSponsor($sponsorList)
    {
        $this->sponsorList = $sponsorList;
    }

}