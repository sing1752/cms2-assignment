<?php
/*
 Template Name: Custom Homepage
 */
?>

<?php get_header(); ?>
<?php get_template_part('hero-banner'); ?>

<div class="hero-banner">
    <h1>Welcome to Ottawa Discoveries</h1>
    <p>Your ultimate guide to exploring the vibrant city of Ottawa</p>
</div>

<h2 class="d-flex justify-content-center align-items-center">What people are saying</h2>
<?php display_testimonials(); ?>

<h2 class="d-flex justify-content-center align-items-center">CARDS</h2>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dev-ottawa-discoveries.pantheonsite.io/wp-content/uploads/2024/03/hiking-scaled.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Hiking Trails</h5>
                        <p class="card-text">Explore the breathtaking trails nestled in the heart of nature, offering scenic views and peaceful retreats.</p>
                        <div class="overlay">
                            <div class="overlay-content">
                                <p>Discover the serenity of untouched forests and the joy of connecting with nature on our meticulously curated hiking trails. Get ready for an unforgettable adventure!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dev-ottawa-discoveries.pantheonsite.io/wp-content/uploads/2024/03/food-scaled.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Culinary Delights</h5>
                        <p class="card-text">Indulge in Ottawa's diverse culinary scene, featuring tantalizing dishes from around the globe and local specialties.</p>
                        <div class="overlay">
                            <div class="overlay-content">
                                <p>Experience the richness of Ottawa's food culture through an array of culinary delights. From savory street food to fine dining experiences, there's something to satisfy every palate.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dev-ottawa-discoveries.pantheonsite.io/wp-content/uploads/2024/03/art.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Art Galleries</h5>
                        <p class="card-text">Immerse yourself in Ottawa's vibrant art scene, showcasing diverse works of contemporary and traditional art.</p>
                        <div class="overlay">
                            <div class="overlay-content">
                                <p>Step into a world of creativity and inspiration at Ottawa's renowned art galleries. From modern masterpieces to classical sculptures, each exhibit tells a unique story waiting to be explored.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dev-ottawa-discoveries.pantheonsite.io/wp-content/uploads/2024/03/landmarks.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Historical Landmarks</h5>
                        <p class="card-text">Discover the rich history and cultural heritage of Ottawa through its iconic landmarks and heritage sites.</p>
                        <div class="overlay">
                            <div class="overlay-content">
                                <p>Travel back in time and explore the fascinating stories behind Ottawa's historical landmarks. From majestic castles to ancient ruins, each site holds a piece of the city's past waiting to be uncovered.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dev-ottawa-discoveries.pantheonsite.io/wp-content/uploads/2024/03/urban.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Urban Adventures</h5>
                        <p class="card-text">Experience the hustle and bustle of city life with exciting urban adventures and cultural explorations.</p>
                        <div class="overlay">
                            <div class="overlay-content">
                                <p>Dive into the vibrant energy of Ottawa's urban landscape with thrilling adventures and cultural experiences. From lively markets to dynamic street art, there's always something new to discover in the heart of the city.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="https://dev-ottawa-discoveries.pantheonsite.io/wp-content/uploads/2024/03/family.jpg" class="card-img-top" alt="Card Image">
                    <div class="card-body">
                        <h5 class="card-title">Family Fun</h5>
                        <p class="card-text">Create lasting memories with your loved ones through a variety of family-friendly activities and attractions.</p>
                        <div class="overlay">
                            <div class="overlay-content">
                                <p>Embark on an unforgettable journey with your family and explore the countless adventures awaiting in Ottawa. From thrilling theme parks to interactive museums, there's something for every member of the family to enjoy.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section>
    <div class="home-section highlights-section">
        <h2>Discover Ottawa's Touristic Points</h2>
        <p>Explore the lesser-known attractions and local treasures that make Ottawa unique.</p>
        <div class="image-gallery">
            <img src="<?php echo get_theme_file_uri('assets/parliament-hill.jpg');?>" class="gallery-image">
            <img src="<?php echo get_theme_file_uri('assets/art-gallery.jpg');?>" class="gallery-image">
            <img src="<?php echo get_theme_file_uri('assets/gatineau-park.jpg');?>" class="gallery-image">
            <img src="<?php echo get_theme_file_uri('assets/rideau-canal.jpg');?>" class="gallery-image">
            <img src="<?php echo get_theme_file_uri('assets/byward-market.jpg');?>" class="gallery-image">
            <img src="<?php echo get_theme_file_uri('assets/museum-nature.jpg');?>" class="gallery-image">
        </div>
    </div>
</section>

<section>
    <div class="home-section video-section">
        <h1 class="text-center">Explore Ottawa in Video</h1>
        <div class="video-container">
            <iframe src="https://player.vimeo.com/video/255789220?h=316bc00849&color=fdfdff&byline=0&portrait=0" width="100%" height="100%" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
</section>

<?php get_footer(); ?>
