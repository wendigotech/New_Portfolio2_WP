</div>
            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?><div class="wrapper" id="wrapper-footer-full">
                <div id="footer-full-content" tabindex="-1" class="container">
                    <div class="row">
                        <?php if ( is_active_sidebar( 'footerfull' ) ) : ?><?php dynamic_sidebar( 'footerfull' ); ?><?php endif; ?>
                        
                        
                    </div>
                </div>
            </div><?php endif; ?>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            
                        <a href="<?php echo esc_url( home_url() ); ?>" rel="home" class="">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gfx/VectorEPS.svg" width="200" alt="wendigo logo"/>
                            </a></div>
                        <div class="col-md-6 flex-column">
                            <?php if ( has_nav_menu( 'primary' ) ) : ?><?php wp_nav_menu( array(
                                        'menu' => 'secondary',
                                        'menu_class' => 'navbar-nav mt-2 mt-lg-0 ml-auto',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?><?php endif; ?>
                        </div>
                        
                        <div class="col-md-3 d-flex flex-column align-content-center align-items-center">
                            <h3 class="title"><?php _e( 'Follow us:', 'wdg1' ); ?></h3>
                            <div class="btn-wrapper profile">
                                <a target="_blank" href="https://twitter.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us"> <i class="fab fa-twitter"></i> </a>
                                <a target="_blank" href="https://www.facebook.com/creativetim" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us"> <i class="fab fa-facebook-square"></i> </a>
                                <a target="_blank" href="https://dribbble.com/creativetim" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us"> <i class="fab fa-dribbble"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    <?php wp_footer(); ?></body>
</html>
