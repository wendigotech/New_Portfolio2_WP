
    <?php if ( have_posts() ) : ?>
        <section class="cards"> 
            <?php while ( have_posts() ) : the_post(); ?>
                <article class="card card--1">
                    <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                    <div class="card__img <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link">
                        <?php $image_attributes = (is_singular() || in_the_loop()) ? wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'normal', 'with-image' ) : null; ?>
                        <div class="card__img--hover <?php if($image_attributes) echo 'with-image'; ?>" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                    </a>
                    <div class="card__info">
                        <span class="card__category"><?php the_tags(); ?></span>
                        <h3 class="card__title"><?php the_title(); ?></h3>
                        <span class="card__by"><?php _e( 'by', 'wdg1' ); ?> <?php the_author(); ?></span>
                    </div>
                </article>
            <?php endwhile; ?>
        </section>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
    <?php endif; ?>
