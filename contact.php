<?php

require ('classes/contact.php');
require ('classes/link.php');

$page = new Contact ();
$page->setTitle('Contact Us'. '<br /><br />');
echo $page->getTitle();
echo $page->getEmail();

$link = new Link();
echo $link->homepageLink();