<?php

//require ('page.php'); --> why don't I need this?

class Sponsor extends Page
{
    protected $sponsorList;

    public function getSponsor()
    {
        return $this->sponsorList;
    }

    public function setSponsor($sponsorList)
    {
        $this->sponsorList = $sponsorList;
    }

    public function getSponsorTitle()
    {
        return $this->title;
    }

    public function setSponsorTitle($title)
    {
        $this->title = $title;
    }

    public function sponsorFormat()
    {
        return 'Sponsor - ' . $this->getSponsorTitle();
    }

}