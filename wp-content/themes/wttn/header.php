<!DOCTYPE html>
<html>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes,minimum-scale=1.0,maximum-scale=3.0" />
        <title><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?></title>
        <link href="https://fonts.googleapis.com/css?family=Amatic+SC" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/media.css">
        <script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.1.0.min.js"></script>
    </head>
    <body <?php if(is_home()) { ?> class="withmap" <?php } ?>>
        <div id="wrapper">
            <div id="header">
                <div class="three-rounds-holder">
                    <div class="round-menu"></div>
                    <div class="round-menu"></div>
                    <div class="round-menu"></div>
                </div>
                <div class="reload-icon-holder">
                    <img src="<?php bloginfo('template_directory')?>/images/recycle-icon.png">
                </div>
                <button class="signmeup">SIGN ME UP</button>
                <!--<a href="<?php echo home_url();?>/sign-me-up"><button class="signmeup">SIGN ME UP</button></a>-->
            </div>