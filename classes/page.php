<?php

class Page
{
    protected $title;
    protected $content;

    public function renderPage()
    {

    }

    public function getTitle()
    {
        return '<span style="text-decoration: underline;">' .  $this->title . '</span>';
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




