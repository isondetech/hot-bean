<?php include "inc/head.php";?>
<?php include "inc/nav.php";?>
<?php include "inc/cards.php";?>

<?php 
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
?>


<!-- <div class="cards-container">
    <h2>Title</h2>
    <div class="card-container">

        <div class="card">
            <div class="card-img">
                <img src="./imgs/avatar-1.png">
            </div>
            <h6>Title</h6>
            <h3>Sub title</h3>
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
        </div>

        <div class="card">
            <div class="card-img">
                <img src="./imgs/avatar-2.png" alt="black-avatar-icon">
            </div>
            <h6>Title</h6>
            <h3>Sub title</h3>
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
        </div>

        <div class="card">
            <h3>Title</h3>
            <a href='jobs.php'><button>Click me!</button><a>
            <p>Lorem ipsum is placeholder text commonly used in the graphic, print, and publishing industries for previewing layouts and visual mockups.</p>
        </div>
        
    </div>
</div> -->