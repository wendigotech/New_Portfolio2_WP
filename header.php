<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta name="author" content="The Pinegrow Team">
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
        <?php wp_head(); ?>
    </head>
    <body class="<?php echo implode(' ', get_body_class()); ?>">
        <div class="hfeed site" id="page">
            <header>
                <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="100">
                    <div class="container">
                        <div class="navbar-translate">
                            <?php if ( ! has_custom_logo() ) : ?>
                                <div>
                                    <a rel="home" class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>"><?php bloginfo( 'name' ); ?></a>
                                </div>
                            <?php else : ?>
                                <?php the_custom_logo(); ?>
                            <?php endif; ?>
                            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse justify-content-end" id="navigation">
                            <div class="navbar-collapse-header">
                                <div class="row">
                                    <div class="col-6 collapse-brand">
                                        <a> <?php _e( 'BLK•', 'wdg1' ); ?> </a>
                                    </div>
                                    <div class="col-6 collapse-close text-right">
                                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                                            <i class="tim-icons icon-simple-remove"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <?php wp_nav_menu( array(
                                        'menu' => 'primary',
                                        'menu_class' => 'navbar-nav mt-2 mt-lg-0 ml-auto ',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </nav>
            </header>
            <div>