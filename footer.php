<?php
/*
Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<div class="content">
    <!-- Contact Page Content -->
    <h2>Contact Us</h2>
    <p>If you have any questions, please feel free to reach out to us.</p>
    
    <!-- Simple Contact Form -->
    <form action="sendmail.php" method="post">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" rows="4" required></textarea><br>
        
        <input type="submit" value="Send">
    </form>
</div>

<?php get_footer(); ?>