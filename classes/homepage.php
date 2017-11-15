<?php

require ('page.php');

class Homepage extends Page
{
    protected $title = '<h1>Pages 101</h1>';
    protected $content = '<p>' . 'Here is some amazing content!' . '</p>' . '<p>' . 'Make sure to check out the cool links below!' . '</p>';
}