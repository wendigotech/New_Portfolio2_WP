
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article2 <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-meta">
                        <p><?php _e( 'Posted on', 'wdg1' ); ?> <span><?php the_modified_date(); ?></span> <?php _e( 'by', 'wdg1' ); ?> <span><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php the_author(); ?></a></span></p>
                    </div>
                </header>
                <div>
                    <?php the_content(); ?>
                    <?php wp_link_pages( array() ); ?>
                </div>
                <footer class="entry-footer">
                    <?php if ( has_tag() ) : ?>
                        <span class="tags-links"><?php the_tags( 'Tags: ', ', ' ); ?></span>
                    <?php endif; ?>
                    <?php edit_post_link( '<b class="text-success">Edit Post</b>' ); ?>
                </footer>
            </article2>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
    <?php endif; ?>
    <nav class="container navigation post-navigation pt-3 pb-3">
        <h2 class="sr-only"><?php _e( 'Post navigation', 'wdg1' ); ?></h2>
        <div class="row nav-links justify-content-between">
            <span class="nav-previous"><?php previous_post_link( '%link', __( '&laquo; %title', 'wdg1' ) ); ?></span>
            <span class="nav-next"><?php next_post_link( '%link', __( '%title &raquo;', 'wdg1' ) ); ?></span> 
        </div>
        <!-- .nav-links -->
    </nav>
    <?php if ( comments_open() || get_comments_number() || is_single() ) : ?>
        <?php comments_template( '/comments.php' ); ?>
    <?php endif; ?>
