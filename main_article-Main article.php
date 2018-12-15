<article <?php post_class( 'mb-5' ); ?> id="post-<?php the_ID(); ?>">
                                                <header class="entry-header">
                                                    <?php if ( is_singular() ) : ?><h2><?php the_title(); ?></h2><?php else : ?><h2><a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_title(); ?></a></h2><?php endif; ?>
                                                    <div class="entry-meta">
</div>
                                                </header>
                                                <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail( 'large', array(
            'class' => 'mb-4'
        ) );
        }
     ?>
                                                <div class="entry-content">
                                                    <?php the_excerpt( ); ?>
                                                </div>
                                                <a class="btn btn-primary ml-1" href="<?php echo esc_url( get_permalink() ); ?>"><?php _e( 'Read More', 'wdg1' ); ?></a>
                                                
                                            </article>