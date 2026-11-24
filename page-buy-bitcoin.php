<?php
/**
 * Template Name: Buy Bitcoin Page
 */

get_header();
?>

<section class="hero">
    <h1><?php esc_html_e( 'Buy', 'whatisbitcoin' ); ?> <span>Bitcoin</span></h1>
    <p><?php esc_html_e( 'Choose your region to find trusted exchanges, peer-to-peer marketplaces, and bitcoin-only services near you.', 'whatisbitcoin' ); ?></p>
</section>

<section class="container">
    <div class="regions-grid">
        <?php
        $regions = array(
            array(
                'icon'  => '🌎',
                'title' => __( 'North America', 'whatisbitcoin' ),
                'desc'  => __( 'United States, Canada, Mexico, and the Caribbean.', 'whatisbitcoin' ),
                'links' => array(
                    __( 'Swan Bitcoin', 'whatisbitcoin' )  => '#',
                    __( 'River', 'whatisbitcoin' )         => '#',
                    __( 'Bull Bitcoin', 'whatisbitcoin' )  => '#',
                    __( 'Bisq', 'whatisbitcoin' )          => '#',
                ),
            ),
            array(
                'icon'  => '🌍',
                'title' => __( 'Europe', 'whatisbitcoin' ),
                'desc'  => __( 'EU, UK, Switzerland, and surrounding regions.', 'whatisbitcoin' ),
                'links' => array(
                    __( 'Relai', 'whatisbitcoin' )        => '#',
                    __( 'CoinCorner', 'whatisbitcoin' )   => '#',
                    __( 'Bitcoin Suisse', 'whatisbitcoin' ) => '#',
                    __( 'Hodl Hodl', 'whatisbitcoin' )    => '#',
                ),
            ),
            array(
                'icon'  => '🌎',
                'title' => __( 'Latin America', 'whatisbitcoin' ),
                'desc'  => __( 'Brazil, Argentina, Colombia, Mexico, and beyond.', 'whatisbitcoin' ),
                'links' => array(
                    __( 'Bipa', 'whatisbitcoin' )       => '#',
                    __( 'Lemon Cash', 'whatisbitcoin' ) => '#',
                    __( 'Ripio', 'whatisbitcoin' )      => '#',
                    __( 'Paxful', 'whatisbitcoin' )     => '#',
                ),
            ),
            array(
                'icon'  => '🌏',
                'title' => __( 'Asia', 'whatisbitcoin' ),
                'desc'  => __( 'Japan, South Korea, Singapore, India, and more.', 'whatisbitcoin' ),
                'links' => array(
                    __( 'bitFlyer', 'whatisbitcoin' )   => '#',
                    __( 'Bithumb', 'whatisbitcoin' )    => '#',
                    __( 'Coinhako', 'whatisbitcoin' )   => '#',
                    __( 'WazirX / ZebPay', 'whatisbitcoin' ) => '#',
                ),
            ),
            array(
                'icon'  => '🌏',
                'title' => __( 'Oceania', 'whatisbitcoin' ),
                'desc'  => __( 'Australia, New Zealand, and the Pacific Islands.', 'whatisbitcoin' ),
                'links' => array(
                    __( 'BTC Markets', 'whatisbitcoin' )     => '#',
                    __( 'Easy Crypto', 'whatisbitcoin' )     => '#',
                    __( 'Binance Australia', 'whatisbitcoin' ) => '#',
                    __( 'Bisq', 'whatisbitcoin' )            => '#',
                ),
            ),
            array(
                'icon'  => '🌍',
                'title' => __( 'Africa', 'whatisbitcoin' ),
                'desc'  => __( 'Nigeria, South Africa, Kenya, Ghana, and more.', 'whatisbitcoin' ),
                'links' => array(
                    __( 'Yellow Card', 'whatisbitcoin' ) => '#',
                    __( 'Luno', 'whatisbitcoin' )        => '#',
                    __( 'Paxful', 'whatisbitcoin' )      => '#',
                    __( 'Binance P2P', 'whatisbitcoin' ) => '#',
                ),
            ),
        );

        foreach ( $regions as $region ) :
            ?>
            <div class="modal-card region-card" data-group="region">
                <div class="icon"><?php echo esc_html( $region['icon'] ); ?></div>
                <h2><?php echo esc_html( $region['title'] ); ?></h2>
                <p><?php echo esc_html( $region['desc'] ); ?></p>
                <div class="modal-detail">
                    <h4><?php esc_html_e( 'Popular Options', 'whatisbitcoin' ); ?></h4>
                    <ul>
                        <?php foreach ( $region['links'] as $label => $url ) : ?>
                            <li><a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $label ); ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php
get_footer();
