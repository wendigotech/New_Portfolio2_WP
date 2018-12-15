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
                            
                        <?php the_custom_logo(); ?></div>
                        <div class="col-md-6">
                            <ul class="nav nav-justified">
                                <li class="nav-item">
                                    <a href="./index.html" class="nav-link">
                  <?php _e( 'Home', 'wdg1' ); ?> </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./examples/landing-page.html" class="nav-link">
                  <?php _e( 'Landing', 'wdg1' ); ?> </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./examples/register-page.html" class="nav-link">
                  <?php _e( 'Register', 'wdg1' ); ?> </a>
                                </li>
                                <li class="nav-item">
                                    <a href="./examples/profile-page.html" class="nav-link">
                  <?php _e( 'Profile', 'wdg1' ); ?> </a>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="col-md-3">
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
