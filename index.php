<?php
get_header(); ?>

<div class="pg-empty-placeholder content content--canvas"></div>
<div>
    <div class="jumbotron">
        <div class="row">
            <div class="container col-lg-6 col-md-6 col-sm-7">
                <h1 class="display-3"><?php _e( 'Design &amp; Develop&nbsp;&nbsp;', 'wdg1' ); ?><b><?php _e( 'UX, UI, XD, WordPress&nbsp;&nbsp;', 'wdg1' ); ?></b></h1>
                <p class="lead" style="color:<?php echo get_theme_mod( 'jumbotron_text_color' ); ?>;"><?php _e( 'I Freelance as a Web dessigner and developer. I showcase stuff, curate usefull tools for Web professionals. Feel free to check out my Blog &amp; Portfolio.', 'wdg1' ); ?></p>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-5 container align-items-center d-flex">
                <img src="file:///E:/Wendigo_new/OneDrive/Web_Design/Personal_Projects/New_Portfolio2/assets/gfx/operating_system.svg"/>
            </div>
        </div>
    </div>
</div>
<div class="wrapper" id="index-wrapper">
    <div id="content" tabindex="-1" class="container">
        <div class="row">
            <?php if ( get_theme_mod( 'show_left_sidebar' ) ) : ?>
                <div class="col-md-4 widget-area d-sm-none d-none d-md-inline-block" role="complementary" id="left-sidebar">
                    <?php if ( is_active_sidebar( 'left-sidebar' ) ) : ?>
                        <?php dynamic_sidebar( 'left-sidebar' ); ?>
                    <?php endif; ?>
                    <h3 class="widget-title"><?php _e( 'Recent Posts', 'wdg1' ); ?></h3> 
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