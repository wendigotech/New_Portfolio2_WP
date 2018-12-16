<?php
get_header(); ?>

<div class="pg-empty-placeholder content content--canvas"></div><div>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3" style="color:<?php echo get_theme_mod( 'jumbotron_heading_color' ); ?> !important;"><?php _e( 'Starter Theme', 'wdg1' ); ?> <b><?php _e( '2', 'wdg1' ); ?></b></h1>
            <p class="lead" style="color:<?php echo get_theme_mod( 'jumbotron_text_color' ); ?>;"><?php _e( 'Powered by Bootstrap 4 and SASS.', 'wdg1' ); ?></p>
        </div>
    </div>
</div>
<div class="wrapper" id="index-wrapper">
    <div id="content" tabindex="-1" class="container">
        <div class="row">
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?><div class="col-md-4 widget-area d-sm-none d-md-inline-block d-none" role="complementary" id="left-sidebar">
                <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?><?php dynamic_sidebar( 'left-sidebar' ); ?><?php endif; ?><form method="get" id="searchform" action="https://wendigo.tech/" role="search">
                    <label class="sr-only" for="s"><?php _e( 'Search', 'wdg1' ); ?></label>
                    <div class="input-group">
                        <input class="field form-control" id="s" name="s" type="text" placeholder="Search …" value="">
                        <span class="input-group-append"> <input class="submit btn btn-primary" id="searchsubmit" name="submit" type="submit" value="Search"> </span>
                    </div>
                </form><h3 class="widget-title"><?php _e( 'Recent Posts', 'wdg1' ); ?></h3><ul>
                    <li>
                        <a href="https://wendigo.tech/post2/"><?php _e( 'Post2', 'wdg1' ); ?></a>
                    </li>
                    <li>
                        <a href="https://wendigo.tech/hello-world/"><?php _e( 'Hello world!', 'wdg1' ); ?></a>
                    </li>
                </ul>


            </div><?php endif; ?>
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