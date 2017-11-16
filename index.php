<?php

include('html/head.php');
include('classes/link.php');
require('classes/homepage.php');

$page = new Homepage();
echo $page->getTitle();
echo $page->getContent();

$link = new Link();
echo $link->navigation();

include('html/foot.php');

//use a templating engine for all of this?