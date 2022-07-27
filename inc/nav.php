<?php
    // retrieve caller page
    // if caller page is same as the nav link
    // return style attribute
    function set_active($nav_link){
        // get caller file
        // remove file extension
        // convert first letter to captial
        $webpage = ucfirst(basename($_SERVER['SCRIPT_FILENAME'], ".php"));
        if($webpage==$nav_link){
            return "style=\"color:#45a29e;\"";
        }elseif($webpage=="Submitted"){
            if($nav_link=="Apply"){
                return "style=\"color:#45a29e;\"";
            }
        }
    }
?>

<div class="nav">
    <div class="nav-bar">
        <div class="nav-logo">
            <h1><a href="./">Hot Beans</a></h1>
        </div>
        <div class="nav-links">
            <ul>
                <li><a <?php echo set_active("Index")?> href="./">Home</a></li>
                <li><a <?php echo set_active("Jobs")?> href="./jobs.php">Jobs</a></li>
                <li><a <?php echo set_active("Apply")?> href="./apply.php">Apply</a></li>
            </ul>
        </div>
    </div>
</div>