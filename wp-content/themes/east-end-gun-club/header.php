<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    
    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php echo esc_url(get_bloginfo('pingback_url')); ?>">
    <?php endif; ?>


    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Skip to content link for accessibility -->
<a class="skip-link screen-reader-text" href="#main-content"><?php esc_html_e('Skip to content', 'east-end-gun-club'); ?></a>

<header id="masthead" class="site-header">
    <nav class="navbar navbar-expand-lg" style="background-color: #141346;" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="container d-flex align-items-center justify-content-between flex-lg-nowrap flex-wrap">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img style="width:150px; object-fit: contain;" src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/LogoWht2.webp'); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>">
                </a>
                
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#primary-nav" aria-controls="primary-nav" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'east-end-gun-club'); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <?php
                wp_nav_menu(array(
                    'theme_location'  => 'primary',
                    'container'       => 'div',
                    'container_id'    => 'primary-nav',
                    'container_class' => 'collapse navbar-collapse mt-lg-0 mt-3',
                    'menu_class'      => 'navbar-nav m-auto mb-lg-0 d-flex gap-lg-4 gap-1',
                    'fallback_cb'     => false,
                    'depth'           => 2,
                    'walker'          => new Bootstrap_Nav_Walker(),
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>'
                ));
                ?>
                
                <div class="d-flex gap-3 align-items-center justify-content-lg-end justify-content-between">
                    <?php if (!is_user_logged_in()) : ?>
                        <a class="signCol" href="<?php echo esc_url(wp_login_url()); ?>"><?php esc_html_e('Sign in', 'east-end-gun-club'); ?></a>
                    <?php else : ?>
                        <a class="signCol" href="<?php echo esc_url(wp_logout_url()); ?>"><?php esc_html_e('Log out', 'east-end-gun-club'); ?></a>
                    <?php endif; ?>
                    <a class="btn btn-danger" href="<?php echo esc_url(home_url('/join-now')); ?>" role="button"><?php esc_html_e('Join Now', 'east-end-gun-club'); ?></a>
                </div>
            </div>
        </div>
    </nav>
</header>

<main id="main-content" class="site-main">