# DLSJBC — Redesigned Website

A restyled HTML/CSS/JS version of https://www.dlsjbc.edu.ph, rebuilt as a
static, framework-free multi-page site: `index.html` (Home), `admissions.html`,
`about.html`, `contact.html`, `articles.html`.

## What changed from the original
- **New visual design**: warm ivory background, deep Lasallian forest-green +
  academic gold accents (colors drawn from the school's own green/gold
  identity), serif display type (Fraunces) paired with Inter body text.
- **New interactions**: sticky nav with animated underline, gold scroll
  progress bar, a rotating seal in the hero, scroll-reveal fade-ups, card
  hover-lift + image zoom, animated buttons, tabbed admissions steps, a
  working (client-side) contact form, and a live search/filter on Articles.
- **Same content**: news items, calendar, admissions requirements &
  procedures, full history, and contact details were carried over from the
  five pages you linked — plus two bonus items on the About page (the
  60th-anniversary crest artwork and a Citylympics community photo) and a
  LET-passers congratulations card on Home/Articles, from the images you
  supplied.
- **All images are local** — no internet connection, download script, or
  external hotlinking needed. Everything renders fully offline.

## Folder structure
```
dlsjbc-site/
├── index.html
├── about.html
├── admissions.html
├── contact.html
├── articles.html
└── assets/
    ├── css/style.css
    ├── js/main.js
    └── images/           ← every photo, already in place
```

## How to open it
1. Unzip the project (if you received it as `dlsjbc-site.zip`).
2. Open the `dlsjbc-site` folder.
3. Double-click `index.html` — it opens in your browser with full styling
   and images, no setup required.

## Notes
- The Facebook icons in the header/footer are now inline SVG (not image
  files), so they always render crisply with no missing-asset risk.
- The contact form has no backend; submitting it shows a "Thanks for
  submitting!" confirmation in the page, matching the original site's
  behavior, but doesn't send an email. Wire it up to a form service (e.g.
  Formspree) or your own backend when you're ready to collect real messages.
- "Read more" links on the original four news cards point to the matching
  DLSJBC post pages, since those individual article pages weren't part of
  the URLs provided. The LET-passers card links to the school's Facebook
  page.
