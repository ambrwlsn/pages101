<?php

require ('classes/news.php');
require ('classes/sponsor.php');
require ('classes/link.php');
require ('data-source/articles.php');
require ('data-source/sponsors.php');

//view logic start

foreach ($newsArticles as $article) {
    echo 'Title: ' . $article->getNiceTitle() . '<br/>';
    echo 'Date: ' . $article->getDate() . '<br/>';
    echo '<hr>';
}

$sponsorsSource=new Datasource_Sponsor();
//$sponsorsSource->addSponsor('The Unit');
$sponsors = $sponsorsSource->getSponsors();

foreach ($sponsors as $sponsor) {
    echo '<p>'.$sponsor->sponsorFormat() . '</p>';
}

$link = new Link();
echo $link->navigation();






