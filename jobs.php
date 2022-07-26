<?php include "inc/head.php";?>
<?php include "inc/nav.php";?>
<?php include "inc/section.php";?>

<?php
    $title = "Front-end developer";
    $desc = 
    "Working as part of the front end development team the role involves bridging the gaps between UX/UI
    by converting visual designs to UI components then working closely with back end team to populate content
    delivered from our in-house admin tools and bring the website to life. A high level of attention to detail
    and fast problem solving is a must as creation of new UI components and maintenance of existing live components
    form the majority of the daily tasks.";

    $body = new Section($title, $desc, "Apply", "apply.php");
    $body->create();
?>
