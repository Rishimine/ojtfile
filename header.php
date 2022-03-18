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
            <div class="pc_none">
                <?php wp_nav_menu(); ?>
            </div>
            <nav id="navi">
                <div class="logo_img2">
                    <img src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
                </div>
                <ul class="nav_menu">
                    <?php wp_nav_menu(); ?>
                </ul>
            </nav>
            <div class="toggle_btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
        </div>
    </header>