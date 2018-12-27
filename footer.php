
            </div>
            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
                <div class="wrapper" id="wrapper-footer-full">
                    <div id="footer-full-content" tabindex="-1" class="container">
                        <div class="row">
                            <?php if ( is_active_sidebar( 'footerfull' ) ) : ?>
                                <?php dynamic_sidebar( 'footerfull' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <footer class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3 d-flex justify-content-center mt-md-0 align-items-end mt-3 mb-md-2">
                            <a href="<?php echo esc_url( home_url() ); ?>" rel="home" class="">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gfx/VectorEPS.svg" alt="wendigo logo" width="150"/>
                            </a>
                        </div>
                        <div class="col-md-6">
                            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                                <?php wp_nav_menu( array(
                                        'menu' => 'secondary',
                                        'menu_class' => 'navbar-nav ml-auto d-flex flex-row mt-2 mt-lg-5 mt-md-5 justify-content-around',
                                        'container' => '',
                                        'depth' => '2',
                                        'fallback_cb' => 'wp_bootstrap4_navwalker::fallback',
                                        'walker' => new wp_bootstrap4_navwalker()
                                ) ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-3 d-flex justify-content-end align-items-end">
                            <div class="btn-wrapper profile">
                                <a target="_blank" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us" href="https://www.instagram.com/wendigotech/?hl=en"> <i class="fab fa-instagram"></i> </a>
                                <a target="_blank" href="https://www.behance.net/wendigotecc003" class="btn btn-icon btn-neutral btn-round btn-simple" data-toggle="tooltip" data-original-title="Like us"> <i class="fab fa-behance"></i> </a>
                                <a target="_blank" href="https://dribbble.com/boncis" class="btn btn-icon btn-neutral  btn-round btn-simple" data-toggle="tooltip" data-original-title="Follow us"> <i class="fab fa-dribbble"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <?php wp_footer(); ?>
    </body>
</html>
