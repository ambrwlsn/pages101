<?php

require ('classes/about.php');

//view logic start

$page = new About();
echo $page->getTitle();

