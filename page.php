<?php
/**
 * Default page template
 */

get_header();
?>

<main class="container page-content">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'page-body' ); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="page-featured-image">
                        <?php the_post_thumbnail( 'large', array( 'alt' => get_the_title() ) ); ?>
                    </div>
                <?php endif; ?>

                <header class="page-header">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </header>

                <div class="page-body-content">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="no-results">
            <p><?php esc_html_e( 'Page not found.', 'whatisbitcoin' ); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php
get_footer();
