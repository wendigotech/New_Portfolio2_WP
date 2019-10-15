<?php get_header(); ?>

                <div class="pg-empty-placeholder content content--canvas"></div>
                <div>
</div>
                <div class="wrapper" id="index-wrapper">
                    <div id="content" tabindex="-1" class="container">
                        <div class="jumbotron">
                            <div class="row">
                                <div class="container col-lg-6 col-md-6 col-sm-7">
                                    <h1 class="display-3"><?php _e( 'Design &amp; Develop&nbsp;&nbsp;', 'wdg1' ); ?><b><?php _e( 'UX, UI, XD, WordPress&nbsp;&nbsp;', 'wdg1' ); ?></b></h1>
                                    <p class="lead"><?php _e( 'I freelance as a designer and developer. I showcase, curate &amp; test usefull tools &amp; resources for web professionals. Feel free to check out my Blog &amp; Portfolio.', 'wdg1' ); ?></p>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-5 container d-flex align-items-center">
                                    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gfx/operating_system2.svg" height="500" width="500" alt="Man touching a large display"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?>
                                <div class="widget-area d-sm-none d-none d-md-inline-block col-md-4" role="complementary" id="left-sidebar">
                                    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                                        <?php dynamic_sidebar( 'left-sidebar' ); ?>
                                    <?php endif; ?> 
                                </div>
                            <?php endif; ?>
                            <div class="col-md-8 content-area col-sm-12" id="primary">
                                <main class="site-main" id="main">
                                    <?php get_template_part( 'loop-templates/content' ); ?>
                                    <nav aria-label="Posts navigation">
                                        <?php posts_nav_link( null, __( '&#xAB; Newer Posts', 'wdg1' ), __( 'Older Posts &#xBB;', 'wdg1' ) ); ?>
                                    </nav>
                                </main>                                 
                            </div>
                        </div>
                    </div>
                </div>                

<?php get_footer(); ?>