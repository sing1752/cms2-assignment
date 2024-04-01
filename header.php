<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css');?>">
    <?php wp_head();?>
</head>
<body>
    <header>
    <div class="site-logo">
        <a href="https://dev-ottawa-discoveries.pantheonsite.io/homepage/">
            <img src="<?php echo get_theme_file_uri('assets/logo.png'); ?>" >
        </a>
        <nav class="site-navigation">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'primary-menu',
            'menu_class'     => 'primary-menu',
        ) );
        ?>
        </nav>
    </div>
	<div class="social-icons">
    	<a href="https://www.tiktok.com/" target="_blank"><i class="fab fa-tiktok"></i></a>
    	<a href="https://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
    	<a href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
    	<a href="https://www.youtube.com/user/ottawatourism" target="_blank"><i class="fab fa-youtube"></i></a>
	</div>

    </header>
