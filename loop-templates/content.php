
    <div class="content1">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'mb-5' ); ?> id="post-<?php the_ID(); ?>">
                    <header class="entry-header">
                        <?php if ( is_singular() ) : ?>
                            <h2><?php the_title(); ?></h2>
                        <?php else : ?>
                            <h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2>
                        <?php endif; ?>
                    </header>
                    <?php if ( is_singular() ) : ?>
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail( 'large', array(
                                'class' => 'mb-4'
                            ) );
                            }
                         ?>
                    <?php elseif ( has_post_thumbnail( get_the_ID() ) ) : ?>
                        <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail( 'large', array(
                                    'class' => 'mb-4'
                            ) ); ?></a>
                    <?php endif; ?>
                    <div class="entry-content">
                        <?php the_excerpt( ); ?>
                    </div>
                    <a class="btn btn-primary float-right btn-sm" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'wdg1' ); ?></a>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
        <?php endif; ?>
    </div>
