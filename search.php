<?php
/**
 * Search results template
 */

get_header();
?>

<section class="search-results-header">
    <h1><?php esc_html_e( 'Search results for', 'whatisbitcoin' ); ?> <span><?php echo esc_html( get_search_query() ); ?></span></h1>
</section>

<main class="results-list">
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
            <p><?php esc_html_e( 'No results found. Try a different search term.', 'whatisbitcoin' ); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php
get_footer();
