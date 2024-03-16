<?php get_header(); ?>
<div class="hero-banner">
    <h1>Welcome to Ottawa Discoveries</h1>
        <p>Your ultimate guide to exploring the vibrant city of Ottawa</p>
</div>

<section>
<div class="home-section testimonials-section">
    <p>"Amazing experience! Ottawa Discoveries helped me discover hidden gems I never knew existed."</p>
            <p class="author">- John Doe</p>
    <p>"Thank you Ottawa Discoveries for making my trip to Ottawa unforgettable. Can't wait to come back!"</p>
            <p class="author">- Jane Smith</p>    
</div>
</section>

<section>
    <div class="home-section highlights-section">
        <h2>Discover Ottawa's Touristic Points</h2>
        <p>Explore the lesser-known attractions and local treasures that make Ottawa unique.</p>    
        <div class="image-gallery">
            <img src="<?php echo get_theme_file_uri('assets/parliament-hill.jpg');?>">
            <img src="<?php echo get_theme_file_uri('assets/art-gallery.jpg');?>">
            <img src="<?php echo get_theme_file_uri('assets/gatineau-park.jpg');?>">
            <img src="<?php echo get_theme_file_uri('assets/rideau-canal.jpg');?>">
            <img src="<?php echo get_theme_file_uri('assets/byward-market.jpg');?>">
            <img src="<?php echo get_theme_file_uri('assets/museum-nature.jpg');?>">
        </div>
    </div>
</section>

<section>
<div class="home-section video-section">
    <h2>Explore Ottawa in Video</h2>
        <iframe src="https://player.vimeo.com/video/255789220?h=316bc00849&color=fdfdff&byline=0&portrait=0" width="1000" height="700" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
</div>
</section>

<?php get_footer(); ?>
