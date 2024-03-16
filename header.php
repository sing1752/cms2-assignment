
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@200..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('style.css');?>">
    <?php wp_head();?>
</head>
<body>
    <header>
    <div class="site-logo">
        <a href="http://localhost/wordpress">
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
    </header>