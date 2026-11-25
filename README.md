# WhatIsBitcoin WordPress Theme

A custom dark, Bitcoin-first WordPress theme for WhatIsBitcoin.com.

## Brand Colors

- **White:** `#ffffff`
- **Orange:** `#f7931a`
- **Dark Blue:** `#2a323f`

## Page Templates

- **Landing Page** — search-first homepage + 7 Steps timeline
- **Buy Bitcoin Page** — 6 region cards
- **Articles Page** — grid of published posts with featured-image thumbnails
- **Books Page** — curated book list by difficulty
- **Glossary Page** — A–Z sticky alphabet nav + term cards
- **Tools Page** — tools hub grid

## Installation

1. Download the repo as a zip, or zip the `whatisbitcoin-theme` folder locally.
2. In WordPress Admin, go to **Appearance → Themes → Add New → Upload Theme**.
3. Upload the zip and activate the theme.

## Required WordPress Setup

### 1. Create the core pages

Go to **Pages → Add New** and create one page for each of these:

| Page Title      | Template         | Purpose                          |
|-----------------|------------------|----------------------------------|
| Home            | Landing Page     | Homepage                         |
| Buy Bitcoin     | Buy Bitcoin Page | Region cards                     |
| Articles        | Articles Page    | Blog post grid                   |
| Books           | Books Page       | Curated book list                |
| Glossary        | Glossary Page    | A–Z glossary                     |
| Tools           | Tools Page       | Tools hub                        |

Set each page’s template in the right sidebar under **Page Attributes → Template**.

### 2. Set the static homepage

1. Go to **Settings → Reading**.
2. Under **Your homepage displays**, select **A static page**.
3. Set **Homepage** to the **Home** page you created.
4. Set **Posts page** to the **Articles** page.
5. Save changes.

### 3. Create the primary menu

1. Go to **Appearance → Menus**.
2. Create a new menu named **Primary**.
3. Add these pages: **Buy Bitcoin, Tools, Articles, Books, Glossary, About**.
4. Under **Menu Settings**, check **Primary Menu**.
5. Save.

### 4. Add content

- **Articles:** Publish posts with featured images. The Articles page will display them automatically.
- **Books:** Edit `page-books.php` to fill in Amazon or publisher links for books marked with `#`.
- **Glossary:** Glossary terms are hardcoded in `page-glossary.php`. To link each term to a full article, add a `url` field to each term and update `page-glossary.php`.

## Notes

- The homepage will fall back to the Landing Page content even if no static homepage is set.
- Search uses native WordPress search (`/?s=query`).
- Glossary terms are currently hardcoded in `page-glossary.php`.
- Books are currently hardcoded in `page-books.php`.
- Vote 4 Bitcoin is intentionally not included in this theme.
