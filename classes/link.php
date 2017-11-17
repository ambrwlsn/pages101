<?php
$page='home';

require_once (__DIR__ . '/../html/body.php');

//@todo how do we set the active link?
class Link
{

    protected $link;

    public function getLink()
    {
        return $this->link;
    }

    public function setLink($link)
    {
        $this->link = $link;
    }

    public function addLink($linkUrl, $linkText)
    {
        //add this to $this->links
    }

    //@todo fill in array with navigation information
    protected $links = array(
        "news-list.php" => "News Articles",
        "contact.php" => "Contact",
        "about.php" => "About"
    );

    public function getLinks()
    {
        return $this->links;
    }

//    public function navigation()
//    {
//        foreach ($this->links as $key => $value) {
//
//        }
//    }

    //@todo change this to be not using echo
    //@todo how can we get this to use the same template as the function above
//    public function homepageLink()
//    {
//       echo '<p>' . '<a href="index.php">Go Home</a>' . '</p>';
//
//    }

}


