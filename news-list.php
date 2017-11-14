<?php

require ('classes/news.php');
require ('data-source/articles.php');

//view logic start

foreach ($newsArticles as $article) {
    echo 'Title: ' . $article->getTitle() . '<br/>';
    echo 'Date: ' . $article->getDate() . '<br/>';
    echo '<hr>';
}








