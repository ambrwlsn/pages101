<?php

require ('pages.php');

class About extends Pages
{
    protected $work;
    protected $title = 'About Page';

    public function getWork()
    {
        return $this->work;
    }

    public function setWork($work)
    {
        $this->work = $work;
    }
}