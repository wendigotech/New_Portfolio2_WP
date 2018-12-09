<?php
get_header(); ?>

<div>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3" style="color:<?php echo get_theme_mod( 'jumbotron_heading_color' ); ?> !important;"><?php _e( 'Starter Theme', 'wdg1' ); ?> <b><?php _e( '2', 'wdg1' ); ?></b></h1>
            <p class="lead" style="color:<?php echo get_theme_mod( 'jumbotron_text_color' ); ?>;"><?php _e( 'Powered by Bootstrap 4 and SASS.', 'wdg1' ); ?></p>
        </div>
    </div>
</div>
<div class="wrapper" id="index-wrapper">
    <div class="container " id="content" tabindex="-1">
        <div class="row">
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area" role="complementary" id="left-sidebar">
                    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'left-sidebar' ); ?>
                    <?php endif; ?> 
                </div>
            <?php endif; ?>
            <div class="col-md-8 content-area" id="primary">
                <main class="site-main" id="main">
                    <?php get_template_part( 'loop-templates/content' ); ?>
                </main>                                 
            </div>
        </div>
    </div>
</div>                

<?php get_footer(); ?>