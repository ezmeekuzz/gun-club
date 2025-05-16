</main><!-- #main-content -->

<footer class="container-fluid pt-5 pb-0 p-2 site-footer" style="background-color: #141346;">
    <div class="container">
        <img class="topImg" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/newImg14.webp'); ?>" alt="<?php esc_attr_e('Footer decoration', 'east-end-gun-club'); ?>">
        
        <div class="row">
            <div class="col-lg-3 col-12 d-flex justify-content-lg-start justify-content-center align-items-center">
                <img class="footerLogo" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/FooterLogo.webp'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
            </div>
            
            <div class="col-lg-6 col-12 d-flex flex-lg-row flex-column gap-3 mt-4">
                <?php
                // Footer Menu 1
                wp_nav_menu(array(
                    'theme_location' => 'footer-1',
                    'container'      => false,
                    'menu_class'     => 'd-flex flex-column gap-2 p-0',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s" style="list-style: none;">%3$s</ul>'
                ));
                
                // Footer Menu 2
                wp_nav_menu(array(
                    'theme_location' => 'footer-2',
                    'container'      => false,
                    'menu_class'     => 'd-flex flex-column gap-2 ps-lg-3 p-0',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s" style="list-style: none;">%3$s</ul>'
                ));
                
                // Footer Menu 3
                wp_nav_menu(array(
                    'theme_location' => 'footer-3',
                    'container'      => false,
                    'menu_class'     => 'd-flex flex-column gap-2 ps-lg-3 p-0',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s" style="list-style: none;">%3$s</ul>'
                ));
                ?>
            </div>
            
            <div class="col-lg-3 col-12 text-light">
                <address class="addressCol d-flex flex-column gap-2 align-items-lg-end align-items-center p-0" style="list-style: none;">
                    <span><?php esc_html_e('Range Address:', 'east-end-gun-club'); ?></span>
                    <span>251 County 564 Rd.</span>
                    <span>Milton-Freewater, OR. 97862</span>
                </address>
                
                <address class="addressCol d-flex flex-column gap-2 align-items-lg-end align-items-center p-0 mt-3" style="list-style: none;">
                    <span><?php esc_html_e('Mailing Address:', 'east-end-gun-club'); ?></span>
                    <span>PO Box 251</span>
                    <span>Milton-Freewater, OR 97862</span>
                </address>
            </div>
        </div>
        
        <div class="row btmSec">
            <div class="col-lg-4 col-12 d-flex align-items-center justify-content-lg-start justify-content-center p-0">
                <p class="copyright">
                    &copy; <?php echo date('Y'); ?> <?php echo esc_html(get_bloginfo('name')); ?>. <?php esc_html_e('All Rights Reserved.', 'east-end-gun-club'); ?>
                </p>
            </div>
            
            <div class="col-lg-6 col-12">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer-legal',
                    'container'      => false,
                    'menu_class'     => 'd-flex gap-5 p-0 justify-content-center m-0',
                    'fallback_cb'    => false,
                    'depth'          => 1,
                    'items_wrap'     => '<ul id="%1$s" class="%2$s" style="list-style: none;">%3$s</ul>'
                ));
                ?>
            </div>
            
            <div class="col-lg-2 col-12">
                <ul class="d-flex gap-2 social-icon m-0 justify-content-end justify-content-lg-start justify-content-center p-0 mt-lg-0 mt-2" style="list-style: none;">
                    <?php if (get_theme_mod('social_linkedin')) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('social_linkedin')); ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-linkedin"></i></a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_facebook')) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('social_facebook')); ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-facebook"></i></a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_instagram')) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('social_instagram')); ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-instagram"></i></a></li>
                    <?php endif; ?>
                    <?php if (get_theme_mod('social_twitter')) : ?>
                        <li><a href="<?php echo esc_url(get_theme_mod('social_twitter')); ?>" target="_blank" rel="noopener noreferrer"><i class="bi bi-twitter"></i></a></li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>