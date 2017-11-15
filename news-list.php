<?php

require ('classes/news.php');
require ('classes/sponsor.php');
require ('data-source/articles.php');
require ('data-source/sponsors.php');

//view logic start

foreach ($newsArticles as $article) {
    echo 'Title: ' . $article->getNiceTitle() . '<br/>';
    echo 'Date: ' . $article->getDate() . '<br/>';
    echo '<hr>';
}

foreach ($sponsorList as $sponsor) {
//    echo 'Title: ' . $sponsor->getTitle() . '<br/>';
    echo '<p>';
    echo 'Sponsor: ' . $sponsor->getSponsor() . '<br/>';
    echo '</p>';
    echo '<hr>';
}








