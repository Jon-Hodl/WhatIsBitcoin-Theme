<?php
/**
 * Fallback template.
 * If no static homepage is set, show the landing page content so the site
 * never looks empty.
 */

// Show landing page content on the homepage if no static page is assigned.
if ( is_front_page() || is_home() ) {
    get_header();
    get_template_part( 'template-parts/landing', 'content' );
    get_footer();
    return;
}

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
