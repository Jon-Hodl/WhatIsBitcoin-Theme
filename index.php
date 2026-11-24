<?php
/**
 * Fallback template
 */

get_header();
?>

<main class="wp-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article <?php post_class( 'result-item' ); ?>>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>
    <?php else : ?>
        <div class="no-results">
            <p><?php esc_html_e( 'No posts found.', 'whatisbitcoin' ); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php
get_footer();
