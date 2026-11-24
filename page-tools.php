<?php
/**
 * Template Name: Tools Page
 */

get_header();
?>

<section class="hero">
    <h1><?php esc_html_e( 'Bitcoin', 'whatisbitcoin' ); ?> <span><?php esc_html_e( 'Tools', 'whatisbitcoin' ); ?></span></h1>
    <p><?php esc_html_e( 'Free, open-source tools to help you understand, use, and stack bitcoin.', 'whatisbitcoin' ); ?></p>
</section>

<section class="container">
    <div class="categories-grid">
        <?php
        $tools = array(
            array(
                'icon'  => '💰',
                'title' => __( 'Bitcoin Price Archive', 'whatisbitcoin' ),
                'desc'  => __( 'Explore the full historical price of bitcoin from the genesis block to today.', 'whatisbitcoin' ),
                'link'  => '#',
            ),
            array(
                'icon'  => '📉',
                'title' => __( 'Sats Are The Standard', 'whatisbitcoin' ),
                'desc'  => __( 'See how the cost of everyday items falls when priced in sats over time.', 'whatisbitcoin' ),
                'link'  => '#',
            ),
            array(
                'icon'  => '📊',
                'title' => __( 'Cost Basis Calculator', 'whatisbitcoin' ),
                'desc'  => __( 'Track your purchases, calculate your average buy price, and see if you should stack or sell.', 'whatisbitcoin' ),
                'link'  => '#',
            ),
            array(
                'icon'  => '📅',
                'title' => __( 'Bitcoin Timeline', 'whatisbitcoin' ),
                'desc'  => __( 'Add and explore the key events that shaped Bitcoin’s history.', 'whatisbitcoin' ),
                'link'  => '#',
            ),
        );

        foreach ( $tools as $tool ) :
            ?>
            <a href="<?php echo esc_url( $tool['link'] ); ?>" class="modal-card tool-card" style="text-decoration: none; color: inherit;" data-group="tool">
                <div class="icon"><?php echo esc_html( $tool['icon'] ); ?></div>
                <h2><?php echo esc_html( $tool['title'] ); ?></h2>
                <p><?php echo esc_html( $tool['desc'] ); ?></p>
            </a>
        <?php endforeach; ?>
    </div>
</section>

<?php
get_footer();
