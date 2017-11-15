<?php

require ('classes/contact.php');

$page = new Contact ();
$page->setTitle('Contact Us'. '<br /><br />');
echo $page->getTitle();
echo $page->getEmail();
