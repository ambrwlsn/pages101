<?php

require ('page.php');

class About extends Page
{
    protected $work = 'We open up brave new worlds of API-led infrastructure, paving the way for major IT transformations.';
    protected $title = 'About Page' . '<br /><br />';

    public function getWork()
    {
        return $this->work;
    }

    public function setWork($work)
    {
        $this->work = $work;
    }

    public function getNiceContent()
    {
        return 'We are brilliant, check us out!' . $this->getContent() . '<br />'; //using the PARENT method rather than the property directly
    }
}