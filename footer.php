<footer>
<div class="footer__main">
    <div class="footer__container">
        <div class="footer__inner footer__inner--top">
            <div class="footer__inner--logo">
                <?php 
                    if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                    }
                ?>
            </div>
        </div>
        <div class="footer__inner footer__inner--bottom">
            <nav role="navigation" aria-label="Footer Menu" class="footer__menu">
                <?php wp_nav_menu( array( 
                    'theme_location' => 'footer-menu', 
                    'container' => '',
                ) ); ?>
            </nav>
        </div>
        
        <div class="footer__inner footer-social-icons">
            <?php
        // get gutenberg page:
            $gblock = get_post( 483 ); //page id
            echo apply_filters( 'the_content', $gblock->post_content );
            ?>
        </div>
        <div class="footer__inner footer__copyright">
            <p>Copyright © SWL Workrooms 2021</p>
        </div> 
    </div>
</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>