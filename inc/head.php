<?php
    function get_caller_file_name(){
        if (basename($_SERVER['SCRIPT_FILENAME'], ".php") == "index"){
            return "Home";
        }
        return ucfirst(basename($_SERVER['SCRIPT_FILENAME'], ".php"));
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Front-end developers job site">
    <title>Hot Beans | <?php echo get_caller_file_name()?></title>
    <link rel="stylesheet" href="./stylesheets/main.css">
    <link rel="stylesheet" href="./stylesheets/nav.css">
    <link rel="stylesheet" href="./stylesheets/section.css">
    <link rel="stylesheet" href="./stylesheets/cards.css">
    <link rel="stylesheet" href="./stylesheets/footer.css">
    <link rel="stylesheet" href="./stylesheets/form.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
</head>