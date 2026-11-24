<?php
/**
 * Template Name: Glossary Page
 */

get_header();
?>

<section class="hero">
    <h1><?php esc_html_e( 'Bitcoin', 'whatisbitcoin' ); ?> <span><?php esc_html_e( 'Glossary', 'whatisbitcoin' ); ?></span></h1>
    <p><?php esc_html_e( 'From Address to Zero-Confirmations, navigate the jargon, tech-speak, and slang of the Bitcoin industry.', 'whatisbitcoin' ); ?></p>
</section>

<nav class="alphabet-nav" id="alphabet-nav"></nav>

<main class="container" id="glossary-content"></main>

<script>
    window.wibGlossary = {
        '0-9': [
            { term: '1MB Blocks', def: '<?php echo esc_js( __( 'The hard cap on the amount of data that can be included in a block added to the blockchain.', 'whatisbitcoin' ) ); ?>' },
            { term: '21 Million', def: '<?php echo esc_js( __( 'The total supply of bitcoin that will ever be mined.', 'whatisbitcoin' ) ); ?>' },
            { term: '2FA', def: '<?php echo esc_js( __( 'Two-Factor Authentication — an additional layer of security for wallets.', 'whatisbitcoin' ) ); ?>' },
            { term: '51% Attack', def: '<?php echo esc_js( __( 'When a mining pool controls at least 51% of total hashrate and can omit or reorganize transactions.', 'whatisbitcoin' ) ); ?>' }
        ],
        'A': [
            { term: 'Address', def: '<?php echo esc_js( __( 'A unique alphanumeric identifier where you send and receive bitcoin payments.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Altcoin', def: '<?php echo esc_js( __( 'Any cryptocurrency that is not bitcoin.', 'whatisbitcoin' ) ); ?>' },
            { term: 'AML', def: '<?php echo esc_js( __( 'Anti-Money Laundering — banking regulations being implemented across the Bitcoin industry.', 'whatisbitcoin' ) ); ?>' },
            { term: 'ASIC Miner', def: '<?php echo esc_js( __( 'Application-Specific Integrated Circuit hardware engineered specifically for mining Bitcoin.', 'whatisbitcoin' ) ); ?>' },
            { term: 'ATH', def: '<?php echo esc_js( __( 'All Time High — the highest price Bitcoin has ever reached.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Atomic Swap', def: '<?php echo esc_js( __( 'A smart contract that allows two parties to exchange assets without a centralized intermediary.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Austrian Economics', def: '<?php echo esc_js( __( 'A free-market school of economics advocating minimal government intervention.', 'whatisbitcoin' ) ); ?>' }
        ],
        'B': [
            { term: 'Bitcoin', def: '<?php echo esc_js( __( 'A peer-to-peer electronic cash system without centralized authority.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Bitcoiner', def: '<?php echo esc_js( __( 'One who owns bitcoin and uses it as a store of value, medium of exchange, or unit of account.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Bitcoin Mining', def: '<?php echo esc_js( __( 'Computers competing to guess a number and win newly minted bitcoins.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Block', def: '<?php echo esc_js( __( 'A file where a group of bitcoin transactions are permanently recorded.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Blockchain', def: '<?php echo esc_js( __( 'The collection of all blocks that have ever been mined.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Block Reward', def: '<?php echo esc_js( __( 'Newly mined bitcoins awarded to the miner who finds a block.', 'whatisbitcoin' ) ); ?>' },
            { term: 'BTFD', def: '<?php echo esc_js( __( 'Buy The Dip — common advice to buy when the price drops.', 'whatisbitcoin' ) ); ?>' }
        ],
        'C': [
            { term: 'Change Address', def: '<?php echo esc_js( __( 'An address where the remaining balance from a transaction is sent.', 'whatisbitcoin' ) ); ?>' },
            { term: 'CoinJoin', def: '<?php echo esc_js( __( 'A privacy technique where users combine transactions to obscure ownership.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Confirmation', def: '<?php echo esc_js( __( 'Verification that a transaction has been included in a block.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Consensus', def: '<?php echo esc_js( __( 'Agreement between all Bitcoin nodes on the current state of the blockchain.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Cryptography', def: '<?php echo esc_js( __( 'Math-based protocols used to encrypt data and create digital signatures.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Custody', def: '<?php echo esc_js( __( 'Who controls the private keys to your bitcoin.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Cypherpunks', def: '<?php echo esc_js( __( 'Privacy activists who use encryption to protect individual freedom.', 'whatisbitcoin' ) ); ?>' }
        ],
        'D': [
            { term: 'DAO', def: '<?php echo esc_js( __( 'Distributed Autonomous Organization — Bitcoin is often described as one.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Desktop Wallet', def: '<?php echo esc_js( __( 'A wallet installed on a desktop computer.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Digital Signature', def: '<?php echo esc_js( __( 'A cryptographic signature using a private key to authorize a transaction.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Divisibility', def: '<?php echo esc_js( __( 'Each bitcoin is divisible into 100,000,000 satoshis.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Double Spend', def: '<?php echo esc_js( __( 'When the same unit of money is spent more than once — a problem Bitcoin solves.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Dust', def: '<?php echo esc_js( __( 'A tiny amount of bitcoin worth less than the fee required to send it.', 'whatisbitcoin' ) ); ?>' }
        ],
        'E': [
            { term: 'Encryption', def: '<?php echo esc_js( __( 'Transforming data to make it unreadable without the proper key.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Escrow', def: '<?php echo esc_js( __( 'A third party used to facilitate a trade between two parties.', 'whatisbitcoin' ) ); ?>' },
            { term: 'ETF', def: '<?php echo esc_js( __( 'Exchange-Traded Fund — allows price exposure without holding bitcoin directly.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Exit Scam', def: '<?php echo esc_js( __( 'When a company runs away with users’ bitcoin or cryptocurrency.', 'whatisbitcoin' ) ); ?>' }
        ],
        'F': [
            { term: 'Faucet', def: '<?php echo esc_js( __( 'A system that gives away small amounts of bitcoin for completing tasks.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Fiat', def: '<?php echo esc_js( __( 'Currency declared legal tender by a government but not backed by a commodity.', 'whatisbitcoin' ) ); ?>' },
            { term: 'FOMO', def: '<?php echo esc_js( __( 'Fear Of Missing Out — a common driver of price pumps.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Fork', def: '<?php echo esc_js( __( 'A change to Bitcoin’s protocol rules, either as a soft fork or hard fork.', 'whatisbitcoin' ) ); ?>' },
            { term: 'FUD', def: '<?php echo esc_js( __( 'Fear, Uncertainty, and Doubt — sensationalist negativity spread for attention.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Fungibility', def: '<?php echo esc_js( __( 'When all units of an asset are interchangeable.', 'whatisbitcoin' ) ); ?>' }
        ],
        'G': [
            { term: 'Game Theory', def: '<?php echo esc_js( __( 'The study of how rational actors make decisions when outcomes depend on others.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Genesis Block', def: '<?php echo esc_js( __( 'The first block of Bitcoin ever mined.', 'whatisbitcoin' ) ); ?>' },
            { term: 'GPU Miner', def: '<?php echo esc_js( __( 'Graphics Processing Unit mining hardware used before ASICs dominated.', 'whatisbitcoin' ) ); ?>' }
        ],
        'H': [
            { term: 'Halving', def: '<?php echo esc_js( __( 'When the Bitcoin block reward is cut in half, roughly every 210,000 blocks.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Hardware Wallet', def: '<?php echo esc_js( __( 'Physical hardware designed to store private keys offline.', 'whatisbitcoin' ) ); ?>' },
            { term: 'HODL', def: '<?php echo esc_js( __( 'A deliberate misspelling of "hold" meaning to keep bitcoin long-term.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Hot Wallet', def: '<?php echo esc_js( __( 'A wallet that stores private keys online.', 'whatisbitcoin' ) ); ?>' }
        ],
        'I': [
            { term: 'Inputs', def: '<?php echo esc_js( __( 'The fractions of bitcoin destroyed to generate outputs in a transaction.', 'whatisbitcoin' ) ); ?>' }
        ],
        'J': [
            { term: 'JoinMarket', def: '<?php echo esc_js( __( 'A decentralized CoinJoin market for privacy.', 'whatisbitcoin' ) ); ?>' }
        ],
        'K': [
            { term: 'KYC', def: '<?php echo esc_js( __( 'Know Your Customer — financial surveillance regulations in the Bitcoin industry.', 'whatisbitcoin' ) ); ?>' }
        ],
        'L': [
            { term: 'Lightning Network', def: '<?php echo esc_js( __( 'A layer built on top of Bitcoin for fast, cheap microtransactions.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Lightning Node', def: '<?php echo esc_js( __( 'A Bitcoin node that processes Lightning Network transactions.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Lightning Wallet', def: '<?php echo esc_js( __( 'A wallet that uses the Lightning Network for near-instant payments.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Liquidity', def: '<?php echo esc_js( __( 'The amount of money available on an exchange to make trades.', 'whatisbitcoin' ) ); ?>' }
        ],
        'M': [
            { term: 'M of N', def: '<?php echo esc_js( __( 'A multisig contract requiring m signatures out of n possible signatories.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Mainnet', def: '<?php echo esc_js( __( 'The main Bitcoin network that uses real bitcoin.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Market Cap', def: '<?php echo esc_js( __( 'The total value of bitcoin calculated as price multiplied by supply.', 'whatisbitcoin' ) ); ?>' },
            { term: 'MemPool', def: '<?php echo esc_js( __( 'The pool of pending Bitcoin transactions waiting to be included in a block.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Miner Fee', def: '<?php echo esc_js( __( 'The fee attached to a transaction to incentivize miners to confirm it.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Mining Pool', def: '<?php echo esc_js( __( 'Users pooling computational resources to increase mining rewards.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Mobile Wallet', def: '<?php echo esc_js( __( 'A wallet app that operates on a mobile device.', 'whatisbitcoin' ) ); ?>' }
        ],
        'N': [
            { term: 'Newcoiner', def: '<?php echo esc_js( __( 'Someone who has recently purchased or received their first fraction of a bitcoin.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Nocoiner', def: '<?php echo esc_js( __( 'An individual who does not own any bitcoin and is often opposed to its adoption.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Node', def: '<?php echo esc_js( __( 'A computer that validates all bitcoin transactions and enforces consensus rules.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Non-Custodial', def: '<?php echo esc_js( __( 'A service that puts the user in control of their own private keys.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Normie', def: '<?php echo esc_js( __( 'A normal person who does not yet fully understand bitcoin.', 'whatisbitcoin' ) ); ?>' }
        ],
        'O': [
            { term: 'Off-Chain', def: '<?php echo esc_js( __( 'Any transaction that takes place off of the blockchain.', 'whatisbitcoin' ) ); ?>' },
            { term: 'On-Chain', def: '<?php echo esc_js( __( 'Any transaction recorded publicly on the blockchain.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Orange Pill', def: '<?php echo esc_js( __( 'Helping someone see the truth about Bitcoin.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Orphan Block', def: '<?php echo esc_js( __( 'A valid block mined at the same time as another and abandoned by the network.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Outputs', def: '<?php echo esc_js( __( 'The new fractions of bitcoin generated from inputs in a transaction.', 'whatisbitcoin' ) ); ?>' }
        ],
        'P': [
            { term: 'Paper Wallet', def: '<?php echo esc_js( __( 'A piece of paper with a private key and corresponding bitcoin address.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Payment Channel', def: '<?php echo esc_js( __( 'A smart contract between two parties on the Lightning Network.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Private Key', def: '<?php echo esc_js( __( 'What allows someone to spend bitcoin at the corresponding address.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Proof of Work', def: '<?php echo esc_js( __( 'A piece of data that is difficult to produce but easy to verify, securing the Bitcoin network.', 'whatisbitcoin' ) ); ?>' }
        ],
        'Q': [
            { term: 'QR Code', def: '<?php echo esc_js( __( 'Quick Response Code — the de facto way to represent a bitcoin address for easy scanning.', 'whatisbitcoin' ) ); ?>' }
        ],
        'R': [
            { term: 'Raspberry Pi', def: '<?php echo esc_js( __( 'A small credit-card-sized computer commonly used to run bitcoin nodes.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Replace By Fee', def: '<?php echo esc_js( __( 'RBF — a method to increase a transaction fee after broadcasting to get confirmed sooner.', 'whatisbitcoin' ) ); ?>' }
        ],
        'S': [
            { term: 'Satoshi Nakamoto', def: '<?php echo esc_js( __( 'The pseudonym used by the creator of Bitcoin. The true identity remains unknown.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Sats', def: '<?php echo esc_js( __( 'Short for Satoshi — the smallest unit of bitcoin. 1 sat = 1/100,000,000 BTC.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Seed Phrase', def: '<?php echo esc_js( __( 'A list of 12-24 words that can restore a bitcoin wallet.', 'whatisbitcoin' ) ); ?>' },
            { term: 'SeedSigner', def: '<?php echo esc_js( __( 'An open-source, air-gapped seed phrase and transaction signing device.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Server Side', def: '<?php echo esc_js( __( 'Information stored on a third-party server rather than by the user.', 'whatisbitcoin' ) ); ?>' }
        ],
        'T': [
            { term: 'Testnet', def: '<?php echo esc_js( __( 'An alternate bitcoin blockchain used for testing. Testnet coins have no value.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Transaction', def: '<?php echo esc_js( __( 'A transfer of bitcoin from one address to another, recorded on the blockchain.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Transaction Confirmation', def: '<?php echo esc_js( __( 'When a sent transaction is added to the blockchain by a miner.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Transportability', def: '<?php echo esc_js( __( 'How easy it is to move money. Bitcoin is one of the most transportable forms of money.', 'whatisbitcoin' ) ); ?>' },
            { term: 'TXID', def: '<?php echo esc_js( __( 'Transaction ID — a unique 64-character hexadecimal number identifying a transaction.', 'whatisbitcoin' ) ); ?>' }
        ],
        'U': [
            { term: 'Unconfirmed Transaction', def: '<?php echo esc_js( __( 'A transaction that has been sent but not yet added to the blockchain.', 'whatisbitcoin' ) ); ?>' },
            { term: 'UTXO', def: '<?php echo esc_js( __( 'Unspent Transaction Output — a specific piece or fraction of a bitcoin that has not been spent.', 'whatisbitcoin' ) ); ?>' }
        ],
        'V': [
            { term: 'Vanity Address', def: '<?php echo esc_js( __( 'An address with customized characters chosen by the user.', 'whatisbitcoin' ) ); ?>' }
        ],
        'W': [
            { term: 'Web Wallet', def: '<?php echo esc_js( __( 'An online wallet that stores bitcoin under the custody of a third party.', 'whatisbitcoin' ) ); ?>' },
            { term: 'WIF', def: '<?php echo esc_js( __( 'Wallet Import Format — a simple form of a private key commonly found on paper wallets.', 'whatisbitcoin' ) ); ?>' }
        ],
        'X': [
            { term: 'xPub', def: '<?php echo esc_js( __( 'Extended public key used to generate all of your bitcoin addresses.', 'whatisbitcoin' ) ); ?>' }
        ],
        'Y': [
            { term: 'yPub', def: '<?php echo esc_js( __( 'An extended public key format used by some wallets to generate addresses.', 'whatisbitcoin' ) ); ?>' }
        ],
        'Z': [
            { term: 'Zero Confirmations', def: '<?php echo esc_js( __( 'A transaction that has been sent but is still waiting in the mempool.', 'whatisbitcoin' ) ); ?>' },
            { term: 'Zero Knowledge', def: '<?php echo esc_js( __( 'A system that collects no information from a user.', 'whatisbitcoin' ) ); ?>' },
            { term: 'zPub', def: '<?php echo esc_js( __( 'An extended public key format used to generate Bitcoin addresses.', 'whatisbitcoin' ) ); ?>' }
        ]
    };
</script>

<script>
    (function () {
        var glossary = window.wibGlossary || {};
        var letters = '0-9ABCDEFGHIJKLMNOPQRSTUVWXYZ'.split('');

        function renderAlphabet() {
            var nav = document.getElementById('alphabet-nav');
            nav.innerHTML = letters.map(function (letter) {
                var hasTerms = glossary[letter] && glossary[letter].length > 0;
                return hasTerms
                    ? '<a href="#letter-' + letter + '">' + letter + '</a>'
                    : '<a class="empty">' + letter + '</a>';
            }).join('');
        }

        function renderGlossary() {
            var container = document.getElementById('glossary-content');
            container.innerHTML = letters.map(function (letter) {
                var terms = glossary[letter];
                if (!terms || terms.length === 0) return '';
                var cards = terms.map(function (item) {
                    return '<div class="term-card modal-card" data-group="term">' +
                        '<h3>' + item.term + '</h3>' +
                        '<p>' + item.def + '</p>' +
                    '</div>';
                }).join('');
                return '<section class="letter-section" id="letter-' + letter + '"><h2>' + letter + '</h2>' + cards + '</section>';
            }).join('');
        }

        renderAlphabet();
        renderGlossary();
    })();
</script>

<?php
get_footer();
