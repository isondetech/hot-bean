<?php


    class Cards{
        private $cards=array();

        function create($img, $title, $sub_title, $desc){
            $card_html = "
                <div class='card'>
                    <div class='card-img'>
                        <img src='$img' alt='avatar-icon'>
                    </div>
                    <h6>$title</h6>
                    <h3>$sub_title</h3>
                    <p>$desc</p>
                </div>";
            array_push($this->cards, $card_html);
        }

        function create_href($title, $cta_name, $cta_href, $desc){
            $card_html= "
            <div class='card'>
            <h3>$title</h3>
            <a target='_blank' href='$cta_href'><button type='button'>$cta_name</button></a>
            <p>$desc</p>
            </div>";
            array_push($this->cards, $card_html);
        }

        function pack($title){
            $cards = implode($this->cards);
            echo "
            <div class='cards-container'>
            <div class='cards-title'>
                <h2>$title</h2>
            </div>
            <div class='card-container'>
            $cards
            </div>
            </div>";
        }
    }

?>