<?php

class Pages
{
    protected $title;
    protected $content;

    public function getTitle()
    {
        return $this->title . '.';
    }

    public function setTitle($title)
    {
        $this->title = $title;
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




