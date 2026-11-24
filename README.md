# WhatIsBitcoin WordPress Theme

A custom dark, Bitcoin-first WordPress theme for WhatIsBitcoin.com.

## Brand Colors

- **White:** `#ffffff`
- **Orange:** `#f7931a`
- **Dark Blue:** `#2a323f`

## Page Templates

- **Landing Page** — search-first homepage + 7 Steps timeline
- **Buy Bitcoin Page** — 6 region cards
- **Articles Page** — 4 category cards
- **Books Page** — scraped book list by difficulty
- **Glossary Page** — A–Z sticky alphabet nav + term cards
- **Tools Page** — tools hub grid

## Installation

1. Zip the `whatisbitcoin-theme` folder.
2. In WordPress Admin, go to **Appearance → Themes → Add New → Upload Theme**.
3. Upload the zip file and activate the theme.
4. Go to **Appearance → Menus** and create a menu named `Primary` with these items:
   - Buy Bitcoin
   - Tools
   - Articles
   - Books
   - Glossary
   - About
5. Assign the menu to the **Primary Menu** location.
6. Create pages and assign the appropriate templates under **Page Attributes → Template**.
7. Set the Landing Page as your homepage under **Settings → Reading → A static page**.

## Notes

- Search uses native WordPress search (`/?s=query`).
- Glossary terms are currently hardcoded in `page-glossary.php`.
- Books are currently hardcoded in `page-books.php`.
- Vote 4 Bitcoin is intentionally not included in this theme.
