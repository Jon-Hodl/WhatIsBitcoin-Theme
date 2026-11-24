<?php
/**
 * Template Name: Articles Page
 */

get_header();
?>

<section class="hero">
    <h1><?php esc_html_e( 'Articles', 'whatisbitcoin' ); ?></h1>
    <p><?php esc_html_e( 'Read reviews, follow tutorials, catch up on news, and explore opinion pieces from a Bitcoin perspective.', 'whatisbitcoin' ); ?></p>
</section>

<section class="container">
    <?php
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

    $articles_query = new WP_Query(
        array(
            'post_type'      => 'post',
            'post_status'    => 'publish',
            'posts_per_page' => 12,
            'paged'          => $paged,
        )
    );

    if ( $articles_query->have_posts() ) :
        ?>
        <div class="articles-grid">
            <?php
            while ( $articles_query->have_posts() ) :
                $articles_query->the_post();
                ?>
                <article class="article-card">
                    <a href="<?php the_permalink(); ?>" class="article-thumb" aria-hidden="true" tabindex="-1">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <?php the_post_thumbnail( 'medium_large', array( 'alt' => get_the_title() ) ); ?>
                        <?php else : ?>
                            <div class="article-thumb-placeholder">
                                <span><?php esc_html_e( 'What Is Bitcoin?', 'whatisbitcoin' ); ?></span>
                            </div>
                        <?php endif; ?>
                    </a>

                    <div class="article-body">
                        <?php
                        $categories = get_the_category();
                        if ( ! empty( $categories ) ) :
                            ?>
                            <div class="article-meta">
                                <span class="article-category"><?php echo esc_html( $categories[0]->name ); ?></span>
                                <span class="article-date"><?php echo esc_html( get_the_date() ); ?></span>
                            </div>
                        <?php endif; ?>

                        <h2 class="article-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h2>

                        <p class="article-excerpt"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>

                        <a href="<?php the_permalink(); ?>" class="article-read-more">
                            <?php esc_html_e( 'Read article', 'whatisbitcoin' ); ?>
                        </a>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <nav class="articles-pagination" aria-label="<?php esc_attr_e( 'Articles pagination', 'whatisbitcoin' ); ?>">
            <?php
            echo wp_kses_post(
                paginate_links(
                    array(
                        'total'     => $articles_query->max_num_pages,
                        'current'   => $paged,
                        'prev_text' => __( '← Previous', 'whatisbitcoin' ),
                        'next_text' => __( 'Next →', 'whatisbitcoin' ),
                    )
                )
            );
            ?>
        </nav>

        <?php
        wp_reset_postdata();
    else :
        ?>
        <div class="articles-empty">
            <p><?php esc_html_e( 'No articles published yet. Check back soon.', 'whatisbitcoin' ); ?></p>
        </div>
        <?php
    endif;
    ?>
</section>

<?php
get_footer();
