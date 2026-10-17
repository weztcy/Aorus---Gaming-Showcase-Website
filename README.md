# AORUS - Gaming Showcase Website

A static, front-end website that showcases AORUS gaming hardware - motherboards, graphics cards, PC components, and gaming laptops - complete with product detail pages, tech articles, a media gallery, and support pages. Built with plain HTML, CSS, and JavaScript (plus a small PHP form for product registration), it presents the AORUS product line in a dark, gaming-inspired visual style with video backgrounds and interactive elements.

---

## Overview

**Background** - AORUS is a premium gaming brand powered by GIGABYTE, known for high-performance gaming hardware. This project was created as a showcase site to present that ecosystem in one cohesive experience.

**Objectives** - Provide a clear, browsable catalog of AORUS products across four main categories, give each product a dedicated detail page with key features and visuals, share tech news and buying guides through an article section, and offer support information (official stores, contact, FAQ, and warranty).

**Problem Statement** - Product information for gaming hardware is often scattered across many sources. This site consolidates product showcases, articles, and service information into a single, easy-to-navigate static website that needs no build step or server-side backend (apart from the optional product-registration form).

**Solution** - A lightweight, multi-page static website with:

- A **Home** page with a live digital clock, a hero video background, and quick links to product categories and articles.
- A **Product** page listing all four product categories with links to per-category and per-product pages.
- **Detail product pages** for every individual product, each with an image slideshow and key-feature highlights.
- An **Explore / Article** section with tech articles and guides.
- **Service** pages for support (official store, contact us, FAQ, warranty).
- A **Product Registration** form (PHP) for users to register purchased products.

**Intended use** - A portfolio / concept showcase of the AORUS product line, useful for demonstrating static-website design, responsive layout, vanilla JavaScript interactivity, and a small amount of server-side handling with PHP.

---

## Features

- **Product catalog** organized into four categories: Motherboards, Graphics Cards, PC Components, and Gaming Laptops, each with its own listing page.
- **Product detail pages** for 20+ individual products, each featuring a key-feature summary, marketing imagery, and an image **slideshow**.
- **Article / Explore section** with tech articles, benchmarks, and buying guides (e.g., Intel 12th-Gen benchmark, gaming-chair guide, DDR5 and PCIe 5.0 explainers, and more).
- **Live digital clock** on the Home page powered by vanilla JavaScript.
- **Back-to-top button** that appears on scroll for long pages.
- **Service & support pages**: Official Store, Contact Us, FAQ, and Warranty Information.
- **Product Registration form** (PHP) that validates and echoes the submitted product details.
- **Immersive presentation**: looping video backgrounds, embedded YouTube content, social-media links, and a consistent dark AORUS-themed layout with hover animations.
- **Reusable styling** per page type (main pages, product listings, detail pages, and articles each have their own CSS file).

---

## Tech Stack

- **Languages:** HTML5, CSS3, JavaScript (vanilla ES5/ES6), PHP
- **Frameworks & Libraries:** None required - the site uses plain HTML/CSS/JavaScript with no external framework dependencies (YouTube embeds are used for media).
- **Tools:** Visual Studio Code, Git, browser DevTools, XAMPP / MAMP / Laragon (only needed to run the PHP registration page)
- **Platforms:** Any modern web browser (Chrome, Firefox, Edge, Safari); Apache + PHP for the `Product Registration.php` page
---

## Project Structure

```
aorus/
|-- index.html                  # Landing page (Home)
|-- LICENSE                     # MIT license
|-- README.md
|-- .gitattributes              # Line-ending normalization
|
|-- mainpage/                   # Main site pages
|   |-- index.html              # Home (digital clock, categories, articles)
|   |-- product.html            # Product overview (all categories)
|   |-- explore.html            # Article / news listing
|   |-- about us.html           # About AORUS
|   |-- Product Registration.php# Product registration form
|   `-- *_style.css             # Styles for each main page
|
|-- products/                   # Product category listing pages
|   |-- motherboards.html
|   |-- graphics cards.html
|   |-- pc components.html
|   |-- gaming laptops.html
|   `-- product kind_style.css  # Shared category-page styles
|
|-- detail products/            # Individual product detail pages
|   |-- Motherboards/           # Z690 Aorus Xtreme/Master/Pro/Ultra, etc.
|   |-- Graphics Cards/         # RTX 30-series AORUS cards
|   |-- PC Components/          # Case, SSD, cooler, PSU, RGB memory
|   `-- Gaming Laptops/         # AORUS 5 / 15 / 17 (Intel 12th Gen)
|
|-- article/                    # Tech articles & news posts
|   |-- *.html                  # One file per article
|   `-- article_style.css
|
|-- service/                    # Support pages
|   |-- official store.html
|   |-- contact us.html
|   |-- faq.html
|   `-- warranty information.html
|
|-- script/                     # Vanilla JavaScript modules
|   |-- Back To Top.js          # Scroll-to-top button behavior
|   |-- Digital Clock.js        # Live date & time on Home
|   `-- Slide Show.js           # Image slideshow on detail pages
|
`-- gallery/                    # Static assets
    |-- Background/             # Looping video backgrounds
    |-- Logo/                   # AORUS logos & social icons
    |-- Article/                # Article images
    |-- Motherboards/           # Product images per model
    |-- Graphics Card/          # GPU images per model
    |-- PC Components/          # Component images & videos
    |-- Gaming Laptops/         # Laptop images
    `-- Web UI/                 # UI design screenshots
```

**Important directories & files:**

- `index.html` - entry point; start here when opening the site.
- `mainpage/` - the core pages reachable from the main navigation (Home, Product, Explore, About Us).
- `detail products/` - one subfolder per category, each containing individual product pages.
- `gallery/` - all media assets. Paths are relative, so keep the folder layout intact.
- `script/` - the reusable JavaScript behaviors used across pages.
- `LICENSE` - the MIT license for the project.

---

## Getting Started

### Prerequisites

- Any modern web browser (Chrome, Firefox, Edge, or Safari).
- For the **Product Registration** page only: a local PHP server such as **XAMPP**, **MAMP**, or **Laragon** with PHP 5.6 or newer.
- No package manager, build tool, or Node.js is required.

### Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/weztcy/Aorus.git
   ```

2. Navigate into the project folder:

   ```bash
   cd Aorus
   ```

3. Open the site:
   - **Option A (static pages):** double-click `index.html` or open it in your browser.
   - **Option B (with PHP form):** copy the project folder into your server's web root (e.g., `C:\xampp\htdocs\Aorus`), start Apache, and visit `http://localhost/Aorus/`.

### Configuration

No environment variables or API keys are needed. The site uses **relative paths** for assets and pages, so do not move files outside their folders or the links will break. If you want to run the PHP form, make sure your PHP server serves the project root and that the `Product Registration.php` file is accessible in its `mainpage/` folder.

### Run the Project

- **Static pages:** open `index.html` in any browser.
- **Full experience (including the registration form):** start your PHP server and browse to the project root.
---

## Usage

1. **Browse products** - From the Home page, click any "Gaming Gears" category card (Motherboards, Graphics Cards, PC Components, Gaming Laptops) or use the **Product** nav link.
2. **View a product** - On a category page, click a product to open its **detail page**, where you can browse the image slideshow with the **Prev / Next** buttons and read the key features.
3. **Read articles** - Use the **Explore** nav link to see the article list, then click an article to read the full post.
4. **Learn about the brand** - Visit **About Us** to watch the AORUS intro video and read the brand story.
5. **Get support** - Use the **Service** links in the footer (Official Store, Contact Us, FAQ, Warranty Information).
6. **Register a product** - On the `Product Registration.php` page, fill in the product type, name, serial number, purchase date, and region, then submit. The page will echo back the submitted details in a summary table.
7. **Convenience helpers** - Use the **Up** button (appears after scrolling) to jump back to the top; watch the live **digital clock** on the Home page.

---

## Results / Output

This is a presentation/portfolio website, so the primary "output" is the rendered site itself:

- A complete multi-page static website with 4 main sections and 20+ product detail pages.
- Product detail pages render image slideshows and key-feature sections from local assets.
- The **Product Registration** form outputs a confirmation message and a table summarizing the submitted registration data (Product Type, Product Name, Serial Number, Purchase Date, Purchase Region).
- All pages share a consistent navigation and footer, with a live clock, scroll-to-top behavior, and video backgrounds running client-side.

---

## Configuration

- **No environment variables** are required by this project.
- **Paths:** all asset and page references are relative. Preserve the existing folder structure (especially `gallery/`, `script/`, `mainpage/`, `products/`, `detail products/`, `article/`, and `service/`) when deploying.
- **PHP form:** `mainpage/Product Registration.php` posts to itself (`<?= $_SERVER['PHP_SELF'] ?>`). No database is used - it only displays the submitted data on screen.
- **Media:** the site references `gallery/Background/*.mp4` for video backgrounds and YouTube embeds for trailers. If a video fails to load in a local file context, serve the site over HTTP (e.g., via XAMPP) or replace the video with a compatible fallback.

> No secrets or credentials are used anywhere in this project.

---

## Testing & Validation

The project is validated manually through browser testing:

1. **Open every page** and verify all navigation links resolve to the correct pages (Home, Product, Explore, About Us, footer links).
2. **Check interactivity** - confirm the digital clock updates on the Home page, the back-to-top button appears and works, and the slideshow Prev/Next buttons cycle through images on detail pages.
3. **Verify product flow** - from category pages, confirm each product card opens its matching detail page.
4. **Test the PHP form** - with a local PHP server running, submit the registration form and confirm the summary table renders with the entered values.
5. **Validate assets** - ensure images and videos in `gallery/` load correctly (look for broken-image icons in the browser console / network tab).

There is currently no automated test suite; testing is performed by browsing the site across browsers and screen sizes.
---

## References & Acknowledgments

- [AORUS Official Website](https://www.aorus.com/) - brand and product information referenced throughout the site.
- [GIGABYTE Motherboards](https://www.gigabyte.com/Motherboard) - product specifications and marketing copy used on detail pages.
- [AORUS - The New King of Gaming (YouTube)](https://www.youtube.com/embed/NmjwMBx8s_g) - trailer embedded on the Home page.
- [AORUS - Enter the Falcon (YouTube)](https://www.youtube.com/embed/y18Y2yhm8jQ) - brand video embedded on the About Us page.
- Article content (Intel 12th-Gen benchmark, DDR5 & PCIe 5.0, gaming-chair guide, etc.) is adapted from public AORUS / GIGABYTE news and articles for educational/portfolio purposes.
- Product images and videos in `gallery/` belong to their respective owners (GIGABYTE / AORUS) and are used here for a non-commercial showcase.

---

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Author & Contact

**Yohanes Dimas Pratama**

- GitHub: [github.com/weztcy](https://github.com/weztcy)
- Portfolio: [dimaspratama.vercel.app](https://dimaspratama.vercel.app)
- LinkedIn: [linkedin.com/in/yohanes-dimas](https://www.linkedin.com/in/yohanes-dimas)
