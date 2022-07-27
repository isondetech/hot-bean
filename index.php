<?php include "inc/head.php";?>
<?php include "inc/nav.php";?>
<?php include "inc/section.php";?>
<?php include "inc/cards.php";?>


<?php
    $section = array(
        "title" => "Submitted",
        "desc" =>
        "Hot Beans is a software engineering company
        looking to hire the best of the best.
        Improving the world begins with an idea,
        and your idea could be the next big thing.
        From concept to creation, we’ll back you with the most talented sales,
        technology and creative visionaries you’ll find anywhere.
        Find your calling and join us in changing the face of Web development.",
        "cta_name"=>"Jobs",
        "cta_href"=>"jobs.php"
    );
    $body = new Section($section["title"], $section["desc"], $section["cta_name"], $section["cta_href"]);
    $body->create();

    $card1 = array(
        "img"=>"./imgs/avatar-1.png",
        "title" => "Jacob Winters",
        "sub_title" => "Front-end Developer",
        "desc" => "One of the lead developers of the team"
    );
    $card2 = array(
        "img"=>"./imgs/avatar-2.png",
        "title" => "Yves Sonder",
        "sub_title" => "Back-end developer",
        "desc" => "The best in the back-end business, hardworking and reliable"
    );
    $card3 = array(
        "img"=>"./imgs/avatar-3.png",
        "title" => "Stephanie Woods",
        "sub_title" => "Lead Analyst",
        "desc" => "A talented and reliable employee when it comes to analysis"
    );
    $cards = new Cards();
    $cards->create($card1["img"],$card1["title"],$card1["sub_title"],$card1["desc"]);
    $cards->create($card2["img"],$card2["title"],$card2["sub_title"],$card2["desc"]);
    $cards->create($card3["img"],$card3["title"],$card3["sub_title"],$card3["desc"]);
    $cards->pack("The Team");

    $card1 = array(
        "title"=>"Codecademy",
        "cta_name" => "Visit",
        "cta_href" => "https://www.codecademy.com/",
        "desc" => "Codecademy offers a series of self-guided tutorials
        for beginners to learn the basics of web development programming."
    );
    $card2 = array(
        "title"=>"Khan Academy",
        "cta_name" => "Visit",
        "cta_href" => "https://www.khanacademy.org/",
        "desc" => "Khan Academy features a variety of self-guided tutorials,
        generally with experts providing audio and/or
        video guidance on the topic while interactive on-screen
        windows show the code and output the results during narration"
    );
    $card3 = array(
        "title"=>"Mozilla Developer Network",
        "cta_name" => "Visit",
        "cta_href" => "https://developer.mozilla.org/",
        "desc" => "These resources, articles, and tutorials are
        perfect for those who absorb information and learn best
        using the tried-and-true method of reading words and seeing
        examples right there on the page"
    );
    $cards = new Cards();
    $cards->create_href($card1["title"],$card1["cta_name"],$card1["cta_href"],$card1["desc"]);
    $cards->create_href($card2["title"],$card2["cta_name"],$card2["cta_href"],$card2["desc"]);
    $cards->create_href($card3["title"],$card3["cta_name"],$card3["cta_href"],$card3["desc"]);
    $cards->pack("Courses");
?>
<?php include "inc/footer.php";?>