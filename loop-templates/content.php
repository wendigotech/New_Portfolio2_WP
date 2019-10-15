
    <?php if ( have_posts() ) : ?>
        <section class="cards"> 
            <?php while ( have_posts() ) : the_post(); ?>
                <?php PG_Helper::rememberShownPost(); ?>
                <article class="card card--1">
                    <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'normal' ) : null; ?>
                    <div class="card__img" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" class="card_link"> <?php $image_attributes = !empty( get_the_ID() ) ? wp_get_attachment_image_src( PG_Image::isPostImage() ? get_the_ID() : get_post_thumbnail_id( get_the_ID() ), 'normal' ) : null; ?><div class="card__img--hover" style="<?php if($image_attributes) echo 'background-image:url(\''.$image_attributes[0].'\')' ?>"></div> </a>
                    <div class="card__info">
                        <span class="card__category"><?php the_tags(); ?></span>
                        <h3 class="card__title"><?php the_title(); ?></h3>
                        <span class="card__by"><?php _e( 'by', 'wdg1' ); ?> <a href="#" class="card__author" title="author"><?php the_author(); ?></a></span>
                    </div>
                </article>
            <?php endwhile; ?>
        </section>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
    <?php endif; ?>
