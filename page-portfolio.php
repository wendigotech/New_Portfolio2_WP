<?php
/*
 Template Name: ST2 Page Without Sidebars
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
        <main class="mt-5 pt-5">
            <?php
                $portfolio_args = array(
                    'category_name' => 'portfolio'
                )
            ?>
            <?php $portfolio = new WP_Query( $portfolio_args ); ?>
            <?php if ( $portfolio->have_posts() ) : ?>
                <div <?php post_class( 'slideshow' ); ?> id="post-<?php the_ID(); ?>">
                    <div class="slideshow__deco"></div>
                    <?php while ( $portfolio->have_posts() ) : $portfolio->the_post(); ?>
                        <div class="slide">
                            <div class="slide__img-wrap">
                                <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                                <div class="slide__img <?php if($image_attributes) echo 'with-image'; ?>" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gfx/cover_size/misty_mountain_cover.jpg');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                            </div>
                            <div class="slide__title-wrap">
                                <span class="slide__number"><?php _e( '1', 'wdg1' ); ?></span>
                                <h3 class="slide__title"><?php the_title(); ?></h3>
                                <?php the_excerpt( ); ?>
                            </div>
                            <div class="slide__side">
                                <?php the_tags(); ?>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <div class="slide">
                        <div class="slide__img-wrap">
                            <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                            <div class="slide__img <?php if($image_attributes) echo 'with-image'; ?>" style="background-image: url('<?php echo esc_url( get_template_directory_uri() ); ?>/assets/gfx/cover_size/misty_mountain_cover.jpg');<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                        </div>
                        <div class="slide__title-wrap">
                            <span class="slide__number"><?php _e( '1', 'wdg1' ); ?></span>
                            <h3 class="slide__title"><?php the_title(); ?></h3>
                            <?php the_excerpt( ); ?>
                        </div>
                        <div class="slide__side">
                            <?php the_tags(); ?>
                        </div>
                    </div>
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
                    <div class="content">
                        <div class="content__item">
                            <span class="content__number"><?php _e( '1', 'wdg1' ); ?></span>
                            <h3 class="content__title"><?php _e( 'Automation', 'wdg1' ); ?></h3>
                            <h4 class="content__subtitle"><?php _e( 'A tree needs to be your friend if you\'re going to paint him', 'wdg1' ); ?></h4>
                            <div class="content__text">
                                <?php _e( 'Just let this happen. We just let this flow right out of our minds. Just relax and let it flow. That easy. Let\'s put some happy little clouds in our world. It\'s a very cold picture, I may have to go get my coat. It’s about to freeze me to death. This is gonna be a happy little seascape. Let\'s go up in here, and start having some fun The least little bit can do so much. Work on one thing at a time. Don\'t get carried away - we have plenty of time. Put your feelings into it, your heart, it\'s your world. These trees are so much fun. I get started on them and I have a hard time stopping.', 'wdg1' ); ?>
                            </div>
                        </div>
                        <div class="content__item">
                            <span class="content__number"><?php _e( '2', 'wdg1' ); ?></span>
                            <h3 class="content__title"><?php _e( 'Machines', 'wdg1' ); ?></h3>
                            <h4 class="content__subtitle"><?php _e( 'This is probably the greatest thing to happen in my life', 'wdg1' ); ?></h4>
                            <div class="content__text">
                                <?php _e( 'We\'re not trying to teach you a thing to copy. We\'re just here to teach you a technique, then let you loose into the world. Now, we\'re going to fluff this cloud. We don\'t have anything but happy trees here. Let\'s do that again. Use what you see, don\'t plan it. Let\'s go up in here, and start having some fun The least little bit can do so much. Work on one thing at a time. Don\'t get carried away - we have plenty of time. Put your feelings into it, your heart, it\'s your world. These trees are so much fun. I get started on them and I have a hard time stopping.', 'wdg1' ); ?>
                            </div>
                        </div>
                        <div class="content__item">
                            <span class="content__number"><?php _e( '3', 'wdg1' ); ?></span>
                            <h3 class="content__title"><?php _e( 'Coexistence', 'wdg1' ); ?></h3>
                            <h4 class="content__subtitle"><?php _e( 'The only guide is your heart', 'wdg1' ); ?></h4>
                            <div class="content__text">
                                <?php _e( 'Let\'s go up in here, and start having some fun The least little bit can do so much. Work on one thing at a time. Don\'t get carried away - we have plenty of time. Put your feelings into it, your heart, it\'s your world. These trees are so much fun. I get started on them and I have a hard time stopping. But we\'re not there yet, so we don\'t need to worry about it. Now let\'s put some happy little clouds in here. What the devil. A thin paint will stick to a thick paint. I\'m going to mix up a little color.', 'wdg1' ); ?> 
                            </div>
                        </div>
                        <div class="content__item">
                            <span class="content__number"><?php _e( '4', 'wdg1' ); ?></span>
                            <h3 class="content__title"><?php _e( 'Bellamio', 'wdg1' ); ?></h3>
                            <h4 class="content__subtitle"><?php _e( 'The only prerequisite is that it makes you happy', 'wdg1' ); ?></h4>
                            <div class="content__text">
                                <?php _e( 'See. We take the corner of the brush and let it play back-and-forth. This is unplanned it really just happens. I\'m sort of a softy, I couldn\'t shoot Bambi except with a camera. I guess I\'m a little weird. I like to talk to trees and animals. That\'s okay though; I have more fun than most people. We\'ll play with clouds today. Didn\'t you know you had that much power? You can move mountains. You can do anything. Let\'s go up in here, and start having some fun The least little bit can do so much. Work on one thing at a time. Don\'t get carried away - we have plenty of time. Put your feelings into it, your heart, it\'s your world. These trees are so much fun. I get started on them and I have a hard time stopping.', 'wdg1' ); ?>
                            </div>
                        </div>
                        <div class="content__item">
                            <span class="content__number"><?php _e( '5', 'wdg1' ); ?></span>
                            <h3 class="content__title"><?php _e( 'Pastures', 'wdg1' ); ?></h3>
                            <h4 class="content__subtitle"><?php _e( 'Let\'s go up in here, and start having some fun', 'wdg1' ); ?></h4>
                            <div class="content__text">
                                <?php _e( 'So often we avoid running water, and running water is a lot of fun. Everyone is going to see things differently - and that\'s the way it should be. A big strong tree needs big strong roots. Steve wants reflections, so let\'s give him reflections. We don\'t have to be committed. We are just playing here. Making all those little fluffies that live in the clouds. Let\'s go up in here, and start having some fun The least little bit can do so much. Work on one thing at a time. Don\'t get carried away - we have plenty of time. Put your feelings into it, your heart, it\'s your world. These trees are so much fun. I get started on them and I have a hard time stopping.', 'wdg1' ); ?>
                            </div>
                        </div>
                        <div class="content__item">
                            <span class="content__number"><?php _e( '6', 'wdg1' ); ?></span>
                            <h3 class="content__title"><?php _e( 'Focus', 'wdg1' ); ?></h3>
                            <h4 class="content__subtitle"><?php _e( 'This is unplanned it really just happens', 'wdg1' ); ?></h4>
                            <div class="content__text">
                                <?php _e( 'But we\'re not there yet, so we don\'t need to worry about it. Now let\'s put some happy little clouds in here. What the devil. A thin paint will stick to a thick paint. I\'m going to mix up a little color. We’ll use Van Dyke Brown, Permanent Red, and a little bit of Prussian Blue. Let\'s go up in here, and start having some fun The least little bit can do so much. Work on one thing at a time. Don\'t get carried away - we have plenty of time. Put your feelings into it, your heart, it\'s your world. These trees are so much fun. I get started on them and I have a hard time stopping.', 'wdg1' ); ?>
                            </div>
                        </div>
                        <button class="content__close">
                            <svg class="icon icon--longarrow">
                                <use xlink:href="#icon-longarrow"></use>
                            </svg>
                        </button>
                    </div>
                </div>
            <?php else : ?>
                <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
            <?php endif; ?>
        </main>
    </div>
</div>                

<?php get_footer(); ?>