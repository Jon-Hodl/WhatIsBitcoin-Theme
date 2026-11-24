<?php
/**
 * Template Name: Books Page
 */

get_header();
?>

<section class="hero">
    <h1><?php esc_html_e( 'Best Bitcoin', 'whatisbitcoin' ); ?> <span><?php esc_html_e( 'Books', 'whatisbitcoin' ); ?></span></h1>
    <p><?php esc_html_e( 'Quality reading material to better understand Bitcoin. Sorted by difficulty from children’s stories to advanced technical deep dives.', 'whatisbitcoin' ); ?></p>
</section>

<main class="container">
    <?php
    $sections = array(
        __( 'For Children', 'whatisbitcoin' ) => array(
            array(
                'title'  => 'Bitcoin Money',
                'author' => 'Michael Caras',
                'desc'   => __( 'A beautifully illustrated tale of Bitville discovering good money when a boy named Satoshi arrives.', 'whatisbitcoin' ),
                'link'   => 'https://www.amazon.com/gp/product/0578490676',
            ),
        ),
        __( 'Beginner', 'whatisbitcoin' ) => array(
            array(
                'title'  => 'The Bitcoin Dictionary',
                'author' => 'Ansel Linderer',
                'desc'   => __( 'Clear definitions of 180+ Bitcoin terms you’ll encounter on your journey.', 'whatisbitcoin' ),
                'link'   => 'https://amz.run/3cwC',
            ),
            array(
                'title'  => 'The Little Bitcoin Book',
                'author' => 'Jimmy Song et al.',
                'desc'   => __( '99 pages of real-world problems that Bitcoin solves, told by everyday people.', 'whatisbitcoin' ),
                'link'   => 'https://www.amazon.com/Little-Bitcoin-Book-Matters-Finances-ebook/dp/B07W957N7T',
            ),
            array(
                'title'  => 'The Simplest Bitcoin Book Ever Written',
                'author' => 'Keysa Luna',
                'desc'   => __( 'Concise explanations with diagrams covering fiat, Bitcoin, and digital money basics.', 'whatisbitcoin' ),
                'link'   => 'https://thesimplestbitcoinbook.net/',
            ),
            array(
                'title'  => 'Inventing Bitcoin',
                'author' => 'Yan Pritzker',
                'desc'   => __( 'The best single book to learn how and why Bitcoin works without heavy jargon.', 'whatisbitcoin' ),
                'link'   => 'https://amzn.to/2SWWx6B',
            ),
            array(
                'title'  => 'This Book Will Save You Time',
                'author' => 'Misir Mahmudov',
                'desc'   => __( 'A practical 87-page book about the most important thing in the world: time.', 'whatisbitcoin' ),
                'link'   => 'https://amz.run/3UwF',
            ),
            array(
                'title'  => '21 Lessons',
                'author' => 'Gigi',
                'desc'   => __( '21 lessons learned falling down the Bitcoin rabbit hole.', 'whatisbitcoin' ),
                'link'   => 'https://www.amazon.com/21-Lessons-Learned-Falling-Bitcoin/dp/1697526349',
            ),
            array(
                'title'  => 'Thank God For Bitcoin',
                'author' => 'Jimmy Song et al.',
                'desc'   => __( 'A biblical perspective on Bitcoin as an honest monetary system.', 'whatisbitcoin' ),
                'link'   => 'https://www.amazon.com/Thank-God-Bitcoin-Corruption-Redemption/dp/1641991216',
            ),
        ),
        __( 'Intermediate', 'whatisbitcoin' ) => array(
            array( 'title' => 'Bitcoin Clarity', 'author' => 'Kiara Bickers', 'desc' => __( 'Metaphors, analogies, and illustrations that cut through the noise.', 'whatisbitcoin' ), 'link' => 'https://amz.run/3WIh' ),
            array( 'title' => 'Bitcoin Q&A', 'author' => 'David Coen', 'desc' => __( '33 important questions about Bitcoin and Lightning, answered clearly.', 'whatisbitcoin' ), 'link' => 'https://www.amazon.com/about-Bitcoin-blockchain-concept-definition/dp/1697134785' ),
            array( 'title' => 'Orange Coin Good', 'author' => 'Jimbo', 'desc' => __( 'Why we need Bitcoin, how it works, and what it achieves.', 'whatisbitcoin' ), 'link' => 'https://amz.run/44eT' ),
            array( 'title' => 'Magic Internet Money', 'author' => 'Jesse Berger', 'desc' => __( 'Twelve perspectives on Bitcoin in bite-sized sections.', 'whatisbitcoin' ), 'link' => 'https://amz.run/3u6v' ),
            array( 'title' => 'Bitcoin: Sovereignty Through Mathematics', 'author' => 'Knut Svanholm', 'desc' => __( 'How mathematical scarcity enables human sovereignty.', 'whatisbitcoin' ), 'link' => 'https://www.amazon.com/Bitcoin-Sovereignty-mathematics-Knut-Svanholm/dp/1090109911' ),
            array( 'title' => 'Bitcoin: Independence Reimagined', 'author' => 'Knut Svanholm', 'desc' => __( 'A deeper exploration of Bitcoin’s implications for individual freedom.', 'whatisbitcoin' ), 'link' => 'https://www.amazon.com/Bitcoin-Independence-reimagined-Knut-Svanholm/dp/B087638GJT' ),
            array( 'title' => 'Bitcoin: Everything Divided By 21 Million', 'author' => 'Knut Svanholm', 'desc' => __( 'A unique framing of Bitcoin’s fixed supply and its effect on value.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'The Bitcoin Shortcut', 'author' => 'Knut Svanholm', 'desc' => __( 'A shortcut to understanding the core ideas that make Bitcoin revolutionary.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'Why Buy Bitcoin', 'author' => 'Andy Edstrom', 'desc' => __( 'A financial advisor’s case for allocating to Bitcoin.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'Digital Cash', 'author' => 'Finn Brunton', 'desc' => __( 'The history and culture behind the quest for private digital money.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'The Story Of Money', 'author' => 'Martin Armstrong', 'desc' => __( 'How money evolved from shells and salt to fiat and finally Bitcoin.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'The Internet Of Money', 'author' => 'Andreas M. Antonopoulos', 'desc' => __( 'Three volumes of talks framing Bitcoin as the internet of money.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'Layered Money', 'author' => 'Nik Bhatia', 'desc' => __( 'How Bitcoin and Lightning fit into the history of layered monetary systems.', 'whatisbitcoin' ), 'link' => '#' ),
        ),
        __( 'Advanced', 'whatisbitcoin' ) => array(
            array( 'title' => 'The Bitcoin Standard', 'author' => 'Saifedean Ammous', 'desc' => __( 'The definitive work on Bitcoin as hard money and its economic implications.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'The Blocksize War', 'author' => 'Jonathan Bier', 'desc' => __( 'The inside story of the battle over Bitcoin’s block size and decentralization.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'Cryptoeconomics', 'author' => 'Eric Voskuil', 'desc' => __( 'A rigorous exploration of the economic principles underpinning Bitcoin.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'Mastering Bitcoin', 'author' => 'Andreas M. Antonopoulos', 'desc' => __( 'The technical bible for developers and anyone who wants to understand how Bitcoin works under the hood.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'Mastering Lightning', 'author' => 'Andreas M. Antonopoulos et al.', 'desc' => __( 'A deep technical guide to the Lightning Network.', 'whatisbitcoin' ), 'link' => '#' ),
            array( 'title' => 'Grokking Bitcoin', 'author' => 'Kalle Rosenbaum', 'desc' => __( 'A visual, example-driven technical introduction to Bitcoin.', 'whatisbitcoin' ), 'link' => '#' ),
        ),
    );

    foreach ( $sections as $section_title => $books ) :
        ?>
        <section class="category">
            <h2><?php echo esc_html( $section_title ); ?></h2>
            <div class="books-grid">
                <?php foreach ( $books as $book ) : ?>
                    <div class="modal-card book-card" data-group="book">
                        <h3><?php echo esc_html( $book['title'] ); ?></h3>
                        <div class="author" style="color: var(--bitcoin-orange); font-size: 0.85rem; font-weight: 600; margin-bottom: 0.75rem;">
                            <?php echo esc_html( $book['author'] ); ?>
                        </div>
                        <p><?php echo esc_html( $book['desc'] ); ?></p>
                        <div class="modal-detail">
                            <a href="<?php echo esc_url( $book['link'] ); ?>" target="_blank" rel="noopener">
                                <?php esc_html_e( '↗ View on Amazon', 'whatisbitcoin' ); ?>
                            </a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endforeach; ?>
</main>

<?php
get_footer();
