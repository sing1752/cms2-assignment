<footer>
    <?php if (!is_front_page() && !is_home()) : ?>
        <div class="google-map-container" style="width: 100%; height: 450px; margin-bottom: 20px;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d179672.20684645916!2d-76.01077170184026!3d45.28057812830982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce07226d6a588d%3A0x2bf86a454eff5bf!2sAlgonquin%20College%20-%20Building%20CA%20-%20Algonquin%20Centre%20for%20Construction%20Excellence!5e0!3m2!1sen!2sca!4v1710641230223!5m2!1sen!2sca" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    <?php endif; ?>

    <div class="footer-columns">
                
                <?php
                $column1_links = array(
                    'Home' => '/',
                    'About Us' => '/about',
                    'Contact Us' => '/contact.php'
                );

                $column2_links = array(
                    'Instagram' => 'https://www.instagram.com/',
                    'TikTok' => 'https://www.tiktok.com/',
                    'Twitter' => 'https://twitter.com/'
                );
        
                $column3_links = array(
                    'City of Ottawa' => 'https://ottawa.ca/en',
                    'Visit Parliament' => 'https://visit.parl.ca/sites/Visit/default/en_CA',
                    'Fairmont Chateau Laurier' => 'https://www.fairmont.com/laurier-ottawa/?cmpid=google_clh_search-branded-ww_chateau-p-revsh&kpid=go_cmp-214494049_adg-150611573947_ad-652861584199_kwd-1735257314873_dev-c_ext-_prd-&gad_source=1&gclid=Cj0KCQjwhtWvBhD9ARIsAOP0GoiYz41h2nISC_RY_bLtOWP6HRWPSUiGi8rsMm0AzwJMS-NDBYrDzZMaAofPEALw_wcB'
                );

                // Function to generate list items for each array of links
                function generate_list_items($links) {
                foreach ($links as $title => $url) {
                echo '<li><a href="' . $url . '">' . $title . '</a></li>';
                }
                }
                ?>

        <div class="footer-column">
            <h3>Ottawa Discoveries</h3>
            <ul>
                <?php generate_list_items($column1_links); ?>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Social Media</h3>
            <ul>
                <?php generate_list_items($column2_links); ?>
            </ul>
        </div>

        <div class="footer-column">
            <h3>Partnership</h3>
            <ul>
                <?php generate_list_items($column3_links); ?>
            </ul>
        </div>
    </div>   
</footer>

    <?php wp_footer(); ?>
</body>
</html>


