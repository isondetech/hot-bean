<?php include "inc/head.php";?>
<?php include "inc/nav.php";?>
<?php include "inc/section.php";?>

<?php
    $title = "Welcome";
    $desc = 
    "Hot Beans is a software engineering company
    looking to hire the best of the best.
    Improving the world begins with an idea,
    and your idea could be the next big thing.
    From concept to creation, we’ll back you with the most talented sales,
    technology and creative visionaries you’ll find anywhere.
    Find your calling and join us in changing the face of Web development.";

    $body = new Section($title, $desc, "Jobs", "jobs.php");
    $body->create();
?>
