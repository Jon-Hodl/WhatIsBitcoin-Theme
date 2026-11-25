<section class="hero" style="min-height: 100vh; display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <h1><?php esc_html_e( 'What is', 'whatisbitcoin' ); ?> <span>Bitcoin</span>?</h1>
    <p class="hero p" style="margin-bottom: 2.5rem;"><?php esc_html_e( 'The open-source money for the digital age. No banks. No borders. Just you and your wealth.', 'whatisbitcoin' ); ?></p>

    <form class="search-wrapper" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
        </svg>
        <input type="text" name="s" placeholder="<?php esc_attr_e( 'what do you want to learn about bitcoin?', 'whatisbitcoin' ); ?>" value="<?php echo esc_attr( get_search_query() ); ?>">
    </form>

    <div class="scroll-hint"><?php esc_html_e( 'Scroll to begin', 'whatisbitcoin' ); ?> &darr;</div>
</section>

<section class="timeline-section" id="steps">
    <div class="timeline-header">
        <h2><?php esc_html_e( '7 Key Steps Toward Hyperbitcoinization', 'whatisbitcoin' ); ?></h2>
        <p><?php esc_html_e( 'The path from your first sat to helping build a Bitcoin standard in your own life and the world.', 'whatisbitcoin' ); ?></p>
    </div>

    <div class="timeline">
        <?php
        $steps = array(
            array(
                'title' => __( 'Stay Humble. Stack Sats.', 'whatisbitcoin' ),
                'desc'  => __( 'The first step is simply to start accumulating bitcoin. Set up a recurring buy, ignore the volatility, and build wealth over time.', 'whatisbitcoin' ),
                'link'  => get_permalink( get_page_by_path( 'buy-bitcoin' ) ) ?: '#',
            ),
            array(
                'title' => __( 'Secure Your Seed Phrase', 'whatisbitcoin' ),
                'desc'  => __( 'Your seed phrase is the master key to your bitcoin. Back it up properly and keep it safe from theft, fire, and forgetfulness.', 'whatisbitcoin' ),
                'link'  => get_permalink( get_page_by_path( 'glossary' ) ) ?: '#',
            ),
            array(
                'title' => __( 'Control Your Private Keys', 'whatisbitcoin' ),
                'desc'  => __( 'Not your keys, not your coins. Move your bitcoin off exchanges and into wallets where you control the private keys.', 'whatisbitcoin' ),
                'link'  => get_permalink( get_page_by_path( 'articles' ) ) ?: '#',
            ),
            array(
                'title' => __( 'Run Your Own Bitcoin Node', 'whatisbitcoin' ),
                'desc'  => __( 'Verify the rules of the network yourself instead of trusting someone else. Running a node is the ultimate form of sovereignty.', 'whatisbitcoin' ),
                'link'  => get_permalink( get_page_by_path( 'articles' ) ) ?: '#',
            ),
            array(
                'title' => __( 'Practice Good Privacy', 'whatisbitcoin' ),
                'desc'  => __( 'Bitcoin is pseudonymous, not anonymous. Learn how to protect your identity and transaction history as you use it.', 'whatisbitcoin' ),
                'link'  => get_permalink( get_page_by_path( 'articles' ) ) ?: '#',
            ),
            array(
                'title' => __( 'Grow The Bitcoin Circular Economy', 'whatisbitcoin' ),
                'desc'  => __( 'Bitcoin becomes money when people earn and spend it directly. Support merchants, creators, and services that accept bitcoin.', 'whatisbitcoin' ),
                'link'  => get_permalink( get_page_by_path( 'articles' ) ) ?: '#',
            ),
            array(
                'title' => __( 'Orange Pill Friends & Family', 'whatisbitcoin' ),
                'desc'  => __( 'Hyperbitcoinization happens one person at a time. Share what you have learned and help others take their first step.', 'whatisbitcoin' ),
                'link'  => get_permalink( get_page_by_path( 'articles' ) ) ?: '#',
            ),
        );

        foreach ( $steps as $index => $step ) :
            $num = $index + 1;
            ?>
            <div class="step">
                <div class="step-dot"></div>
                <div class="step-card modal-card" data-group="step">
                    <div class="step-number"><?php echo esc_html( $num ); ?></div>
                    <h3><?php echo esc_html( $step['title'] ); ?></h3>
                    <p><?php echo esc_html( $step['desc'] ); ?></p>
                    <div class="modal-detail">
                        <h4><?php esc_html_e( 'Learn More', 'whatisbitcoin' ); ?></h4>
                        <ul>
                            <li><a href="<?php echo esc_url( $step['link'] ); ?>"><?php esc_html_e( 'Read the full guide', 'whatisbitcoin' ); ?></a></li>
                            <li><a href="<?php echo esc_url( get_permalink( get_page_by_path( 'articles' ) ) ?: '#' ); ?>"><?php esc_html_e( 'Related articles', 'whatisbitcoin' ); ?></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
