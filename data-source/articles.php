<?php

// getting data from database (if there was one) - code would be replaced if a database as involved

$page = new News();
$page->setTitle('News 1');
$page->setDate('Tuesday 14th November 2017');

$page2 = new News();
$page2->setTitle('News 2');
$page2->setDate('Thursday 16th November 2017');

$page3 = new News();
$page3->setTitle('News 3');
$page3->setDate('Friday 17th November 2017');


$newsArticles = array($page, $page2, $page3);