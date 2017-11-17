<?php

include ('viewlogic.php');
$page='home';

//@todo how do we set the active link?
class Link extends View_Logic
{

    //@todo fill in array with navigation information
    protected $links = array(
        "news-list.php" => "News Articles",
        "contact.php" => "Contact",
        "about.php" => "About"
    );


    public function navigation()
    {
        foreach ($this->links as $key => $value) {
            echo '<p>' . '<a href=' . $key . '>' . $value . '</a>' . '</p>';
        }
    }

    //@todo change this to be not using echo
    //@todo how can we get this to use the same template as the function above
//    public function homepageLink()
//    {
//       echo '<p>' . '<a href="index.php">Go Home</a>' . '</p>';
//
//    }

}


