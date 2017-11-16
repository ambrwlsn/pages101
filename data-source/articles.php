<?php

// getting data from database (if there was one) - code would be replaced if a database as involved

$page = new News();
$page->setTitle('1');
$page->setDate('Tuesday 14th November 2017');

$page2 = new News();
$page2->setTitle('2');
$page2->setDate('Thursday 16th November 2017');

$page3 = new News();
$page3->setTitle('3');
$page3->setDate('Friday 17th November 2017');

//@todo convert to data source class after sponsors
$newsArticles = array($page, $page2, $page3);