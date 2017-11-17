<?php

require_once('link.php');

class View_Logic

{
    //protected $link =  '<p>' . '<a href=' . $key . '>' . $value . '</a>' . '</p>';

    protected $link;

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

}