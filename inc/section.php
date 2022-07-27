<?php
class Section{
    public $title;
    public $desc;
    public $cta_name;
    public $cta_href;

    function __construct($title, $desc, $cta_name, $cta_href){
        $this->title = $title;
        $this->desc = $desc;
        $this->cta_name = $cta_name;
        $this->cta_href = $cta_href;
    }

    function create(){
        echo "<div class='main-container'>
                <div class='section'>
                    <h2>$this->title</h2>
                    <p>$this->desc</p>
                    <div>
                        <a href='$this->cta_href'><button>$this->cta_name</button><a>
                    </div>
                </div>
            </div>";
    }
}
?>

