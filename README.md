# Risk Verifier – Redesigned Web Application & WordPress Theme

A modern, high-performance website redesign for **Risk Verifier** (`riskverifier.com`) featuring a clean **White & Blue corporate theme**, 100% of authentic risk intelligence & background screening content, interactive screening simulator, dynamic quote calculator, and a complete standalone WordPress theme package ready for 1-click upload.

## 🚀 Quick Access

- **WordPress Theme Zip (Ready to Upload):** [`riskverifier-theme.zip`](file:///Users/fidaali/riskverifier/riskverifier-theme.zip)
- **Theme Source Directory:** [`riskverifier-theme/`](file:///Users/fidaali/riskverifier/riskverifier-theme/)
- **Installation Guide:** [`WORDPRESS_INSTALLATION_GUIDE.md`](file:///Users/fidaali/riskverifier/WORDPRESS_INSTALLATION_GUIDE.md)
- **Live Local HTML Preview:** Open [`index.html`](file:///Users/fidaali/riskverifier/index.html) or visit `http://localhost:8089`

## 📁 Key Files & Structure

```
riskverifier/
├── riskverifier-theme.zip          <-- Complete WordPress Theme Zip (Upload this to WP Admin)
├── WORDPRESS_INSTALLATION_GUIDE.md <-- Detailed step-by-step upload guide (English + Urdu summary)
├── riskverifier-theme/             <-- Extracted WordPress theme files
│   ├── style.css                   <-- WP Theme metadata header & styles
│   ├── functions.php               <-- Theme setup, scripts & styles enqueuing
│   ├── header.php                  <-- Top regional contacts bar & navigation
│   ├── footer.php                  <-- 4-column footer with regional desks
│   ├── front-page.php              <-- Redesigned homepage with interactive modules
│   ├── page-services.php           <-- 12-Service portfolio template
│   ├── page-how-it-works.php       <-- 5-Step verification process template
│   ├── page-about.php              <-- Mission, vision & core pillars template
│   ├── page-contact.php            <-- Multi-office contact template with WhatsApp desks
│   ├── screenshot.png              <-- High-res theme preview for WP dashboard
│   └── assets/                     <-- Modular CSS, JS, and image assets
├── index.html                      <-- Standalone HTML5 Homepage preview
├── services.html                   <-- Standalone HTML5 Services preview
├── how-it-works.html               <-- Standalone HTML5 How It Works preview
├── about.html                      <-- Standalone HTML5 About Us preview
├── contact.html                    <-- Standalone HTML5 Contact Us preview
├── css/style.css                   <-- Design system CSS (White & Blue palette)
└── js/main.js                      <-- Frontend interactive logic & simulator
```

## 🛠️ Upload Instructions (Summary)

1. Go to **WordPress Admin** (`riskverifier.com/wp-admin`)
2. Navigate to **Appearance > Themes > Add New > Upload Theme**
3. Choose `riskverifier-theme.zip` and click **Install Now**
4. Click **Activate**


## Responsive layout and service copy (2.0.2)

Large-display styles start at 1600 CSS pixels. Shared containers, typography and
hero visuals grow within caps; existing mobile/tablet styles remain in effect.
The Services dropdown uses three grouped text lists and supports hover, keyboard
focus and mobile expansion.

Service copy was retrieved from https://riskverifier.com/services/ and its twelve
service detail pages on 2026-10-23. The source text, page URLs and published timing
are saved in `riskverifier-theme/assets/data/services.json`. Update that file and
run `python3 scripts/build-services.py` to regenerate static and WordPress service
panels, homepage cards and modal data. The builder does not fetch remote content.
Some advisory pages on the live site repeat generic sanctions/media FAQs; their
wording is retained with the source copy. Pages without a published turnaround
invite the visitor to contact the team rather than promising a timeframe.

Keep `css/style.css` and `riskverifier-theme/assets/css/theme-style.css` identical,
and likewise `js/main.js` and `riskverifier-theme/assets/js/theme-main.js`.
Run `python3 scripts/package-theme.py` after changing theme sources to rebuild and
verify `riskverifier-theme.zip`.

The homepage process is a compact interactive five-step preview with selectable
steps, progress feedback, a short caption and a link to the full How It Works page. Portable Obsidian context is in [PROJECT_CONTEXT.md](PROJECT_CONTEXT.md).
