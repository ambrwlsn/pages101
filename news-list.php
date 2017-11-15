<?php

require ('classes/news.php');
require ('data-source/articles.php');

//view logic start

foreach ($newsArticles as $article) {
    echo 'Title: ' . $article->getNiceTitle() . '<br/>';
    echo 'Date: ' . $article->getDate() . '<br/>';
    echo '<hr>';
}








