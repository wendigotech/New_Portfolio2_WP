<?php
/*
 Template Name: Portfolio
 */
?>
<?php
get_header(); ?>

<div id="page-wrapper" class="wrapper">
    <div id="content" tabindex="-1" class="container-fluid mt-5 ">
        <svg class="hidden">
            <symbol id="icon-arrow" viewbox="0 0 24 24">
                <title>
                    <?php _e( 'arrow', 'wdg1' ); ?>
                </title>
                <polygon points="6.3,12.8 20.9,12.8 20.9,11.2 6.3,11.2 10.2,7.2 9,6 3.1,12 9,18 10.2,16.8 "/>
            </symbol>
            <symbol id="icon-drop" viewbox="0 0 24 24">
                <title>
                    <?php _e( 'drop', 'wdg1' ); ?>
                </title>
                <path d="M12,21c-3.6,0-6.6-3-6.6-6.6C5.4,11,10.8,4,11.4,3.2C11.6,3.1,11.8,3,12,3s0.4,0.1,0.6,0.3c0.6,0.8,6.1,7.8,6.1,11.2C18.6,18.1,15.6,21,12,21zM12,4.8c-1.8,2.4-5.2,7.4-5.2,9.6c0,2.9,2.3,5.2,5.2,5.2s5.2-2.3,5.2-5.2C17.2,12.2,13.8,7.3,12,4.8z"/>
                <path d="M12,18.2c-0.4,0-0.7-0.3-0.7-0.7s0.3-0.7,0.7-0.7c1.3,0,2.4-1.1,2.4-2.4c0-0.4,0.3-0.7,0.7-0.7c0.4,0,0.7,0.3,0.7,0.7C15.8,16.5,14.1,18.2,12,18.2z"/>
            </symbol>
            <symbol id="icon-longarrow" viewbox="0 0 54 24">
                <title>
                    <?php _e( 'longarrow', 'wdg1' ); ?>
                </title>
                <path d="M.42 11.158L12.38.256c.333-.27.696-.322 1.09-.155.395.166.593.467.593.903v6.977h38.87c.29 0 .53.093.716.28.187.187.28.426.28.716v5.98c0 .29-.093.53-.28.716a.971.971 0 0 1-.716.28h-38.87v6.977c0 .416-.199.717-.592.903-.395.167-.759.104-1.09-.186L.42 12.62a1.018 1.018 0 0 1 0-1.462z"/>
            </symbol>
            <symbol id="icon-navarrow" viewbox="0 0 408 408">
                <title>
                    <?php _e( 'navarrow', 'wdg1' ); ?>
                </title>
                <polygon fill="#fff" fill-rule="nonzero" points="204 0 168.3 35.7 311.1 178.5 0 178.5 0 229.5 311.1 229.5 168.3 372.3 204 408 408 204"></polygon>
            </symbol>
        </svg>
        <main>
            <?php
                $portfolio_args = array(
                    'category_name' => 'portfolio'
                )
            ?>
            <?php $portfolio = new WP_Query( $portfolio_args ); ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <div class="slideshow">
                    <div class="slideshow__deco"></div>
                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                        <div class="slide">
                            <div class="slide__img-wrap">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="slide__img <?php if($image_attributes) echo 'with-image'; ?>" style="background-image:url('https://images.unsplash.com/photo-1543633550-6e883c4cc3c6?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=1080&fit=max&ixid=eyJhcHBfaWQiOjIwOTIyfQ');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </div>
                            <div class="slide__side">
                                <?php the_tags(); ?>
                            </div>
                            <div class="slide__title-wrap">
                                <span class="slide__number"><?php the_modified_date(); ?></span>
                                <h3 class="slide__title"><?php the_title(); ?></h3>
                                <h4 class="slide__subtitle"><?php the_excerpt( ); ?></h4>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <button class="nav nav--prev">
                        <svg class="icon icon--navarrow-prev">
                            <use xlink:href="#icon-navarrow"></use>
                        </svg>
                    </button>
                    <button class="nav nav--next">
                        <svg class="icon icon--navarrow-next">
                            <use xlink:href="#icon-navarrow"></use>
                        </svg>
                    </button>
                </div>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
            <?php endif; ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <div class="content">
                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                        <div class="content__item">
                            <span class="content__number"><?php the_modified_date(); ?></span>
                            <h3 class="content__title"><?php the_title(); ?></h3>
                            <h4 class="content__subtitle"><?php the_excerpt( ); ?></h4>
                            <?php the_content(); ?>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <button class="content__close">
                        <svg class="icon icon--longarrow">
                            <use xlink:href="#icon-longarrow"></use>
                        </svg>
                    </button>
                </div>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
            <?php endif; ?>
        </main>
    </div>
</div>                

<?php get_footer(); ?>