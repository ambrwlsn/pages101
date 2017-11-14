<?php

class Pages
{
    protected $title;
    protected $content;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($homepage)
    {
        $this->title = $homepage;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        return $this->content = $content;
    }

}




