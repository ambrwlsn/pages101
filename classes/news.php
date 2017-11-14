<?php

require ('pages.php');

class News extends Pages
{
    protected $date;

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }
}
