
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <?php PG_Helper::rememberShownPost(); ?>
            <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
                <header class="entry-header">
                    <h1><?php the_title(); ?></h1>
                    <div class="entry-meta">
</div>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer class="entry-footer">
                    <?php edit_post_link( '<b class="text-success">Edit Post</b>' ); ?>
                </footer>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <p><?php _e( 'Sorry, no posts matched your criteria.', 'wdg1' ); ?></p>
    <?php endif; ?>
    <?php if ( comments_open() || get_comments_number() || is_page() ) : ?>
        <?php comments_template( '/comments.php' ); ?>
    <?php endif; ?>
