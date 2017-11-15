<?php

//how could I do something other than write require here? how can it be auto-included in the page?
require ('page.php');

class News extends Page
{
    //why a protected property here?!
    //explain difference between private, public, protected
    protected $date;

    //this function allows the date from the News class to be accessed elsewhere
    public function getDate()
    {
        return $this->date;
    }

    //this function allows the date from the News class to be altered elsewhere
    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getNiceTitle()
    {
        return 'News - ' . $this->getTitle(); //using the PARENT method rather than the property directly
    }
}
