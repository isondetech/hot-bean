<?php include "inc/head.php";?>
<?php include "inc/nav.php";?>
<?php include "inc/section.php";?>

<?php

$name = !$_GET["fname"]== "" ? htmlspecialchars($_GET["fname"]): "user";
$section = array(
    "title" => "Submitted",
    "desc" => "Hey $name, your application has been submitted, we'll get back to
    you shortly.",
    "cta_name"=>"Home",
    "cta_href"=>"index.php"
);

$body = new Section($section["title"], $section["desc"], $section["cta_name"], $section["cta_href"]);
$body->create();
?>
<?php include "inc/footer.php";?>
