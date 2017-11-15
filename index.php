<?php include('html/head.php'); ?>

<h1>Pages 101</h1>

<?php echo '<p>' . '<a href="news-list.php">News Articles</a>' . '</p>';

echo '<p>' . '<a href="contact.php">Contact</a>' . '</p>';

echo '<p>' . '<a href="about.php">About</a>' . '</p>';

require('classes/page.php');

include('html/foot.php'); ?>


Page class - set title and content <br><br>

Imagine you want different types of pages like news, homepage, contact page, about page etc. //think about what is common to all of these e.g. title, content could be common to all of them (should be protected - so need methods to set and get them)<br><br>

Specific to news might be the date<br><br>
Specific to contact page - contact form, map<br><br>
Specific to … … … etc.<br><br>

Should be a method in the class (e.g. render class) that renders HTML content that contains content common to all pages - this function should spit out the html itself
