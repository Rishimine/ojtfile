<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/css/style.css">
    <title>ojtfile</title>
    <?php wp_head();?>
</head>

<body>
    <header>
        <div class="header">
            <ul class="header_list">
                <li>Menu01</li>
                <li>Menu02</li>
                <li>Menu03</li>
                <li>Menu04</li>
            </ul>
            <nav id="navi">
                <ul class="nav_menu">
                    <li><a href="">Menu01</a></li>
                    <li><a href="">Menu02</a></li>
                    <li><a href="">Menu03</a></li>
                    <li><a href="">Menu04</a></li>
                </ul>
            </nav>
            <div class="toggle_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>