<?php

require ('classes/about.php');
require ('classes/link.php');
require ('data-source/about-us.php');

//view logic start

$page = new About();
echo $page->getTitle();
echo $page->getNiceContent() . '<br/>';
$page->getWork();
echo $page->getWork();

$link = new Link();
echo $link->homepageLink();

