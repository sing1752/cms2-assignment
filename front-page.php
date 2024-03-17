<?php get_header(); ?>
<div class="hero-banner">
    <h1>Welcome to Ottawa Discoveries</h1>
        <p>Your ultimate guide to exploring the vibrant city of Ottawa</p>
</div>

<section class="testimonial-title">
    <h1>What people are saying</h1>
<div class="home-section testimonials-section">
    <div class="testimonial-container">
        <div class="testimonial">   
        <img src="<?php echo get_theme_file_uri('assets/john.jpg');?>">
        <blockquote>"Absolutely love the service provided by Ottawa Discoveries! They exceeded my expectations in every way possible. Highly recommend!"</blockquote>
        <cite>- John Doe</cite>
    </div>
    <div class="testimonial">
        <img src="<?php echo get_theme_file_uri('assets/jane.jpg');?>">
        <blockquote>"The team at Ottawa Discoveries is incredible. Their attention to detail and dedication to customer satisfaction is unmatched. I'm a customer for life!"</blockquote>
        <cite>- Jane Smith</cite>
    </div>
    <div class="testimonial">
        <img src="<?php echo get_theme_file_uri('assets/david.jpg');?>">
        <blockquote>"I can't thank Ottawa Discoveries enough for their outstanding service. From start to finish, they made the process seamless and enjoyable. 10/10!"</blockquote>
        <cite>- David Johnson</cite>
    </div>
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
