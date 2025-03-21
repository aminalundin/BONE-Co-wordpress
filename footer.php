<div>
<footer id="colophon" class="site-footer">
    <div class="footer-container">
    <div class="footer-logo">
    <a href="<?php echo home_url(); ?>">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.footer.png" alt="Logo">
    </a>
</div>
        
<nav id="footer-navigation" class="footer-links">
    <?php
    wp_nav_menu(
        array(
            'theme_location' => 'footer-menu', // OBS! Se till att detta matchar 'functions.php'
            'menu_id'        => '2',
            'container'      => 'div',
            'container_class'=> 'footer-menu-container',
        )
    );
    ?>
</nav>
</div>
        <!-- <div class="footer-links">
            <ul>
                <li><a href="#">Products</a></li>
                <li><a href="#">About</a></li>
				<li><a href="#">Contact</a></li>
				<li><a href="#">Terms And Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
            </ul>
        </div> -->


        <!-- <div class="footer-socials">
            Lägg till ikoner för sociala medier -->
            <!-- <a href="https://facebook.com" target="_blank">
                <i class="fab fa-facebook"></i>
            </a>
            <a href="https://instagram.com" target="_blank">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="https://tiktok.com" target="_blank">
                <i class="fab fa-tiktok"></i>
            </a>
        </div> -->

        
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>