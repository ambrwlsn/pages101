<?php
require_once ('classes/link.php');

$linkSource = new Link();
foreach ($linkSource->getLinks() as $linkUrl => $linkText){
    echo '<p>' . '<a href=' . $linkUrl . '>' . $linkText . '</a>' . '</p>';
}