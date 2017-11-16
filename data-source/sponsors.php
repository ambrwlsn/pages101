<?php

class Datasource_Sponsors
{

    protected $sponsor;

$sponsor = new Sponsor();
//$sponsor->setTitle('Awesome company 1');
$sponsor->setSponsor('New and Upcoming Startup');

$sponsor2 = new Sponsor();
//$sponsor2->setTitle('Awesome company 1');
$sponsor2->setSponsor('Average Company Ltd.');

$sponsor3 = new Sponsor();
//$sponsor3->setTitle('Awesome company 1');
$sponsor3->setSponsor('Super Duper Cool Best Company Ever');


$sponsorList = array($sponsor, $sponsor2, $sponsor3);

}

//@todo convert this into a class Datasource_Sponsors
//create a method inside class to return the array of sponsors getSponsors()