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
                            <a class="navbar-brand" href="https://demos.creative-tim.com/blk-design-system/index.html" rel="tooltip" title="Designed and Coded by Creative Tim" data-placement="bottom" target="_blank"> <span><?php _e( 'BLK•', 'wdg1' ); ?></span> <?php _e( 'Design System', 'wdg1' ); ?> </a>
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
                            <ul class="navbar-nav">
                                <li class="nav-item p-0">
                                    <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank"> <i class="fab fa-twitter"></i> <p class="d-lg-none d-xl-none"><?php _e( 'Twitter', 'wdg1' ); ?></p> </a>
                                </li>
                                <li class="nav-item p-0">
                                    <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank"> <i class="fab fa-facebook-square"></i> <p class="d-lg-none d-xl-none"><?php _e( 'Facebook', 'wdg1' ); ?></p> </a>
                                </li>
                                <li class="nav-item p-0">
                                    <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank"> <i class="fab fa-instagram"></i> <p class="d-lg-none d-xl-none"><?php _e( 'Instagram', 'wdg1' ); ?></p> </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </header>
            <div>