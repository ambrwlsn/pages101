<?php

//@todo how do we set the active link?
class Link
{

    //@todo fill in array with navigation information
    protected $links = array(
        '' => ''
    );

    public function navigation()
    {
        //@todo create a foreach loop to go through each link and output the html
        ?>


        <p><a href="news-list.php">News Articles</a></p>
        <p><a href="contact.php">Contact</a></p>
        <p><a href="about.php">About</a></p>
        <?php
    }

    //@todo change this to be not using echo
    //@todo how can we get this to use the same template as the function above
    public function homepageLink()
    {
        echo '<p>' . '<a href="index.php">Go Home</a>' . '</p>';
    }

}