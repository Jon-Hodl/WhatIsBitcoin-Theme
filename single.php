<?php
/**
 * Single post template
 */

get_header();
?>

<main class="container article-single">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'article-content' ); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <div class="article-featured-image">
                        <?php the_post_thumbnail( 'large', array( 'alt' => get_the_title() ) ); ?>
                    </div>
                <?php endif; ?>

                <header class="article-header">
                    <h1 class="article-title"><?php the_title(); ?></h1>
                    <div class="article-meta">
                        <time datetime="<?php echo esc_attr( get_the_date( DATE_W3C ) ); ?>">
                            <?php echo esc_html( get_the_date() ); ?>
                        </time>
                        <?php if ( get_the_category_list() ) : ?>
                            <span class="article-categories"><?php echo get_the_category_list( ', ' ); ?></span>
                        <?php endif; ?>
                    </div>
                </header>

                <div class="article-body">
                    <?php the_content(); ?>
                </div>

                <footer class="article-footer">
                    <?php if ( get_the_tag_list() ) : ?>
                        <div class="article-tags">
                            <?php echo get_the_tag_list( '<strong>Tags:</strong> ', ', ' ); ?>
                        </div>
                    <?php endif; ?>
                </footer>
            </article>
        <?php endwhile; ?>
    <?php else : ?>
        <div class="no-results">
            <p><?php esc_html_e( 'Article not found.', 'whatisbitcoin' ); ?></p>
        </div>
    <?php endif; ?>
</main>

<?php
get_footer();
