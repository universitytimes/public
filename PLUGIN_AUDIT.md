# University Times — WordPress Plugin Audit

**Date:** 2026-08-10
**Scope:** All 82 entries under `wp-content/plugins/` (77 valid plugins + 4 broken/orphaned installs).

**Methodology / sources:**
- **Status (Active/Inactive)** comes directly from the site's live database dump (`app/sql/db_dom778193.sql`), which contains the `active_plugins` option — the same value WordPress itself uses to decide what loads. `wp-cli`/PHP are not available in this environment, so the DB dump is the ground-truth source, not an inference. 20 plugins are active; everything else is inactive.
- **Version / last-updated** comes from each plugin's own header (`Version:`) and readme.txt (`Stable tag`, `Tested up to`). On-disk file-modification dates were **not** used as a signal — this is a migrated copy of the site and nearly every file shows the same 2026-08-03 migration-copy date regardless of when the plugin code was actually last touched by its author. "Tested up to" (the WordPress version the author last verified against) is the most reliable proxy for how abandoned a plugin is.
- **Used In / Purpose** comes from grepping the active theme (`wp-content/themes/universitytimes`) and `wp-content/mu-plugins/` for each plugin's actual function names, hooks, and shortcode tags — not just its slug appearing in text. Several plugins looked referenced but weren't (see "False positives" note below each relevant row).

**Security note — read before the table:** ~19 of the plugin folders below have garbled, randomly-prefixed names (`ASFASF...`, `XX...`, `PPPP...`, `xxxxxx...xxxxxx`). This is not data corruption — renaming a plugin's folder is a common way to soft-disable it without deleting it, since WordPress tracks active plugins by exact folder/file path. A `.sucuriquarantine/` directory in the site root (with DB/file backups dated ~Dec 2020) corroborates that this site went through a Sucuri malware cleanup at some point, and these are very likely quarantined/disabled plugins from that event rather than plugins someone casually renamed. None of them are in the active list, but they remain on disk as dead code and should be treated as a security cleanup item, not just "unused."

---

## A. Active Plugins (20)

| Plugin | Status | Version | Used In | Purpose | Flags |
|---|---|---|---|---|---|
| Query Monitor (`query-monitor`) | Active | 4.0.7 (tested WP 7.0) | — (admin-only dev tool by design) | Debug panel: DB queries, hooks, HTTP requests, PHP errors | none |
| Ajax Load More (`ajax-load-more`) | Active | 8.0.1 (tested WP 7.0) | **False positive** — theme has its own `load_more_posts()` AJAX handler (`functions.php:161-163`, called via `action: 'load_more_posts'` in `main.js`); plugin's real hook (`wp_ajax_alm_get_posts`) and `[ajax_load_more]` shortcode are never used | Would provide AJAX "load more posts" pagination via shortcode | **unused** — theme built its own equivalent |
| Better Search Replace (`better-search-replace`) | Active | 1.4.10 (tested WP 6.7) | — (admin utility) | DB search/replace tool, used during environment migrations | none |
| Classic Editor (`classic-editor`) | Active | 1.7.0 (tested WP 7.0) | — (admin, editor UI) | Restores the classic (pre-block) post editor | none |
| Custom Post Templates (`custom-post-template`) | Active | 1.5 (readme tested WP **3.4**, ~2012) | — (registers template dropdown option in admin) | Lets non-CPT post types use custom page templates | **outdated** — author-abandoned since ~2012 |
| Disable Comments (`disable-comments`) | Active | 2.8.0 (tested WP 7.0) | — (site-wide admin setting) | Disables comments sitewide — consistent with this being a comment-free editorial site | none |
| File Manager Advanced (`file-manager-advanced`) | Active | 5.4.12 (tested WP 7.0) | Backing DB tables (`elFinder`) found in separate `MySQLStorage.sql` dump | Admin-side file browser/manager | none |
| Jetpack Boost (`jetpack-boost`) | Active | 4.6.3 (tested WP 7.0) | — (performance backend) | Site-speed/critical-CSS/lazy-load optimization | none |
| Jetpack (`jetpack`) | Active | 16.0.1 (tested WP 7.0) | — (no direct theme hook found) | Broad utility suite (stats, security scanning, CDN, social sharing) — verify in wp-admin which modules are actually turned on | none — confirm active modules |
| KIA Subtitle (`kia-subtitle`) | Active | 4.0.2 (tested WP 7.0) | Heavily used — `the_subtitle()`/`get_the_subtitle()` called in 15+ templates: `editorspicks.php`, `frontlayout.php`, `writerbylines.php`, `single-trinity20*.php`, `single-dearfresherme.php`, `page-editorialboard.php`, `category-newsfeed.php`, etc. | Adds the article "subtitle/dek" field shown under headlines site-wide | none — core to site design |
| Liveblog (`liveblog`) | Active | 1.12.2 (tested WP 6.9) | `functions.php:268` — hooks `liveblog_active_commands` to add a custom "highlight" command | Powers WordPress.com's live-blogging entry system, extended by the theme | none — **but note:** the theme's hook callback uses `array(__CLASS__, ...)` outside any class and references an undefined constant instead of a string, so this custom integration likely throws PHP notices/fails silently. Worth a dev fix, independent of this audit. |
| Mailchimp (`mailchimp`) | Active | 2.1.0 (tested WP 7.0) | **False positive** — `bottomemailsignup.php` and `page-newsletterproper.php` contain hand-pasted HTML forms posting directly to Mailchimp's hosted `list-manage.com` endpoint; the plugin's `[mailchimpsf_form]` shortcode/API is never called | Would embed Mailchimp signup forms via shortcode | **unused** — front end bypasses the plugin entirely |
| PuzzleMe (`puzzleme`) | Active | 1.4.0 (tested WP 7.0) | No theme template references found (likely inserted via shortcode/CPT directly in post content, not theme code) | Embeds interactive crossword/puzzle content | none — usage likely editorial/content-level, not visible in theme code |
| reBusted! (`rebusted`) | Active | 1.2 (tested WP 6.7, ~2024 — comparatively current) | — (no theme references) | Small utility plugin (purpose unclear from theme code alone — check its settings screen) | none — verify still needed |
| Redirection (`redirection`) | Active | 5.9.0 (tested WP 7.0) | — (admin, URL redirect management by design) | Manages 301/302 redirects and 404 logging | none |
| Remove Taxonomy Base Slug (`remove-taxonomy-base-slug`) | Active | 2.1 (readme tested WP **3.9**, ~2014) | — (works via rewrite rules, no theme calls needed) | Strips `/category/`-style taxonomy base prefix from URLs | **outdated** — author-abandoned since ~2014; verify URL structure still works correctly given how much WP's rewrite API has changed since |
| **Slack (`slack`)** | **Active** | 0.6.0 (readme tested WP **4.7.3**, ~2017) | — (self-contained, hooks WP core events internally) | Sends Slack notifications on WP events (post publish, comments) | **duplicate, outdated** — see Slack section below; this is the *oldest and least capable* of the Slack plugins, yet it's the one actually active |
| Toggle wpautop (`toggle-wpautop`) | Active | 1.3.0 (tested WP 5.3, ~2019) | **False positive** — theme calls WP core's native `wpautop()` directly in ~15 templates (e.g. `single.php:500`); the plugin's per-post meta-box toggle is never used | Would let editors disable auto-`<p>` wrapping per post | **unused** |
| WP Last Modified Info (`wp-last-modified-info`) | Active | 1.9.6 (tested WP 6.9) | — (typically auto-injects into content via filter, no explicit theme call needed) | Displays "last updated" date info, likely for SEO/schema markup | none |
| WP Migrate Lite (`wp-migrate-db`) | Active | 2.7.11 (tested WP 7.0) | `wp-content/mu-plugins/wp-migrate-db-pro-compatibility.php` explicitly loads this plugin's compatibility classes | DB push/pull migration tool between environments | none — note the separate `wp-migrate-db-old` folder (below) is dead leftover code from a prior version and should be deleted |

## B. Inactive Plugins — Normally Named (38)

| Plugin | Status | Version | Used In | Purpose | Flags |
|---|---|---|---|---|---|
| Akismet Anti-spam (`akismet`) | Inactive | 5.7 (tested WP 7.0) | — | Comment/form spam filtering | **unused** — comments are disabled sitewide (see `disable-comments`, active), so its main use case is largely moot unless wired to Contact Form 7/Ninja Forms |
| All-in-One WP Migration (`all-in-one-wp-migration`) | Inactive | 7.107 (tested WP 7.0) | — | Full-site backup/migration export tool | **unused** — overlaps with `wp-migrate-db`/`better-search-replace`, which are active |
| Activity Log (`aryo-activity-log`) | Inactive | 2.11.2 (tested WP 6.7) | — | Logs admin/user actions | **duplicate, unused** — overlaps with `simple-history` and `wp-security-audit-log`, both also inactive; three activity-logging plugins installed, none active |
| atec Cache Info (`atec-cache-info`) | Inactive | 1.8.38 (PHP 8.4-tested, tested WP 7.0) | — | Displays cache-status debug info | **unused** |
| Cloudflare (`cloudflare`) | Inactive | 4.14.4 (tested WP 7.0.1) | Theme's only "cloudflare" hit is loading the public `cdnjs.cloudflare.com` CDN in `header.php` — unrelated to this plugin | Cloudflare account integration (cache purge, security settings) | **unused, duplicate** — see `sunny` and `varnish-http-purge` below (other cache-purge tools) |
| Contact Form 7 (`contact-form-7`) | Inactive | 6.1.6 (tested WP 7.0) | — | Form builder | **unused** — overlaps with `ninja-forms`, also inactive; check which form tool the site actually intends to use |
| Custom Twitter Feeds (`custom-twitter-feeds`) | Inactive | 2.7.0 (tested WP 7.0) | — | Embeds Twitter/X feeds | **duplicate, unused** — overlaps with `jm-twitter-cards` |
| Disable WYSIWYG (`disable-wysiwyg`) | Inactive | 1.0.9 (readme tested WP 5.8, ~2021) | — | Disables the visual editor | **outdated, unused** |
| Slack Notifications by dorzki (`dorzki-notifications-to-slack`) | Inactive | 2.0.7 (tested WP 5.3, ~2019) | — | Slack alerts for WP core/plugin updates, CF7 submissions, WooCommerce orders, failed logins | **duplicate** — see Slack section; this is the *newest/most capable* of the three general Slack notifiers, but it's the inactive one |
| Easing Slider (`easing-slider`) | Inactive | 3.0.8 (readme tested WP 4.6, ~2016) | — | Image/content slider | **duplicate, outdated, unused** — see slider cluster below |
| Gutenberg (`gutenberg`) | Inactive | 23.7.1 (tested WP 7.0) | — | Feature-plugin preview of the block editor | **unused** — site runs Classic Editor (active) instead |
| JM Twitter Cards (`jm-twitter-cards`) | Inactive | 14.1.0 (tested WP 6.4.3) | — | Twitter Card meta tags for social sharing | **duplicate, unused** — see Twitter cluster |
| JSON API (`json-api`) | Inactive | 1.1.1 (readme tested WP 3.5.2, ~2013) | — | Exposes a legacy JSON REST-style API | **outdated, unused** — long superseded by WP core's REST API |
| Menu Obfuscator (`menu-obfuscator`) | Inactive | 1.0 (readme tested WP 5.3.2, ~2019) | — | Obscures admin menu items per role | **unused** |
| MetaSlider (`ml-slider`) | Inactive | 3.111.2 (tested WP 7.0) | — | Image/content slider, actively maintained | **duplicate, unused** — best-maintained of the slider cluster, but currently inactive; see slider cluster |
| Ninja Forms (`ninja-forms`) | Inactive | 3.14.11 (tested WP 7.0) | — | Form builder | **duplicate, unused** — overlaps with `contact-form-7`, also inactive |
| Ninja Forms – Slack Notifications (`ninja-forms-slack`) | Inactive | 1.0 (readme tested WP 4.1, ~2015) | — | Sends a Slack message on Ninja Forms submission | **outdated, unused, duplicate-adjacent** — depends on the inactive `ninja-forms`; see Slack section |
| OPcache Reset (`opcache-reset`) | Inactive | 2.4.1 (tested WP 7.0) | — | Admin button to flush PHP OPcache | **unused** |
| Posts 2 Posts (`posts-to-posts`) | Inactive | 1.7.8 (tested WP 6.9) | — | Creates many-to-many relationships between posts | **unused** |
| Blubrry PowerPress (`powerpress`) | Inactive | 11.17.2 (tested WP 7.0) | Indirect only — `page copy 2.php` ("Podcast Page" template) hardcodes CSS classes (`powerpress_links`) and links to `/feed/podcast/` matching this plugin's conventions, but never calls its shortcodes/API | Podcast/RSS-feed publishing | **unused** — template mimics its output but the plugin itself isn't invoked; if podcasting is still a feature, this needs re-activating and properly wiring, not just leaving as styling debris |
| Private Content (`private-content`) | Inactive | 6.4.1 (readme tested WP 5.8, ~2021) | — | Restricts content visibility by user role/login | **unused** |
| Quick Page/Post Redirect (`quick-pagepost-redirect-plugin`) | Inactive | 5.2.4 (tested WP 6.2.2, ~2023) | — | Per-page/post redirect tool | **duplicate, unused** — overlaps with `redirection`, which is active and does the same job site-wide |
| Related Posts (`related-posts`) | Inactive | 3.4.5 (readme tested WP 3.8, ~2014) | **False positive** — theme has its own hand-rolled `bones_related_posts()` in `library/bones.php` using plain `get_posts()`; plugin's functions never called | Would show related-post suggestions via `wp_related_posts` | **outdated, unused** — theme built its own equivalent |
| Scripts n Styles (`scripts-n-styles`) | Inactive | 3.5.8 (tested WP 6.2.2) | — | Per-page script/style enqueue tool | **unused** |
| Search Everything (`search-everything`) | Inactive | 8.1.9 (readme tested WP 4.7.3, ~2017) | — | Expands default WP search to more content types | **duplicate, outdated, unused** — see search cluster |
| Simple History (`simple-history`) | Inactive | 5.30.0 (tested WP 7.0) | — | Admin activity log, actively maintained | **duplicate, unused** — best-maintained of the activity-log cluster, but inactive |
| Sunny (`sunny`) | Inactive | 2.5.0 (readme tested WP 4.9.1, ~2017) | — | Purges Cloudflare cache automatically on content changes (companion to `cloudflare`) | **outdated, duplicate, unused** — depends on the also-inactive `cloudflare` plugin |
| Term Management Tools (`term-management-tools`) | Inactive | 2.0.1 (tested WP 5.6, ~2020) | — | Bulk taxonomy/term management utility | **unused** |
| Use Google Libraries (`use-google-libraries`) | Inactive | 1.6.2.3 (readme tested WP 4.7.4, ~2017) | — | Serves common JS libraries from Google's CDN instead of bundling | **outdated, unused** |
| Useful Banner Manager (`useful-banner-manager`) | Inactive | 1.6.1 (readme tested WP 4.3.1, ~2015; no Stable tag in readme at all) | — | Ad/banner rotation manager | **outdated, unused** |
| User Role Editor (`user-role-editor`) | Inactive | 4.65 (tested WP 7.0) | — | Edits WP role/capability permissions | **unused** |
| Proxy Cache Purge / Varnish (`varnish-http-purge`) | Inactive | 5.12.2 (tested WP 7.0) | — | Purges Varnish/proxy cache on content changes | **duplicate, unused** — third cache-purge tool alongside `cloudflare`/`sunny` |
| WP File Manager (`wp-file-manager`) | Inactive | 8.0.4 (tested WP 6.9.4) | — | Admin file browser | **duplicate, unused** — overlaps with the active `file-manager-advanced` |
| WP htaccess Control (`wp-htaccess-control`) | Inactive | 3.5.1 (readme tested WP 4.3.1, ~2015) | — | GUI editor for `.htaccess` rules | **outdated, unused** |
| Perfect Images / wp-retina-2x (`wp-retina-2x`) | Inactive | 7.1.8 (tested WP 7.0) | — | Regenerates responsive/retina image sizes, WebP/AVIF conversion | **unused** — worth reconsidering given this is an image-heavy editorial site |
| WP Activity Log (`wp-security-audit-log`) | Inactive | 5.6.5 (tested WP 7.0.2) | — | Security-focused activity/audit log | **duplicate, unused** — third of the activity-log cluster |
| Zapier (`zapier`) | Inactive | 1.5.3 (code) / 1.5.2 (readme — minor mismatch) (tested WP 6.5) | — | Connects WP events to Zapier automations | **unused** — also has a duplicate copy of its own code sitting in a `zapier/trunk/` subfolder, worth cleaning up regardless of activation status |
| LivePress (`dsdgggggglivepress`) | Inactive | 1.3.15 (readme tested WP 4.6.1, ~2016) | — (theme's live-blog templates are hand-built and don't call this plugin's classes) | Real-time post-editing/live-blogging tool | **outdated, unused, duplicate-adjacent** — theme already has both the active `liveblog` plugin and a separate hand-built live-blog template system; this third live-blogging tool is redundant with both |

## C. Inactive, Garbled/Soft-Disabled Folder Names (19)

These folder names (`ASFASF...`, `XX...`, `PPPP...`, `xxxxxx...xxxxxx`, etc.) do not match any entry in the site's active-plugins list — a renamed folder can't match the exact path WordPress stores, so all of these are guaranteed inactive. See the security note at the top of this report re: likely Sucuri quarantine origin.

| Plugin | Status | Version | Used In | Purpose | Flags |
|---|---|---|---|---|---|
| Facebook Like Box (`ASFASFfacebook-like-box`) | Inactive | 0.1 (readme tested WP 2.9, ~2009) | — | Embeds a Facebook Like Box widget | **duplicate, outdated, unused** — 1 of 3 Facebook Like Box/Button plugins installed |
| Post Snippets (`ASSSSpost-snippets`) | Inactive | 2.5.3 (readme tested WP 4.4.2, ~2016) | — | Reusable content snippet inserter for editors | **outdated, unused** |
| Header and Footer (`ASdsfSfAAAheader-footer`) | Inactive | 1.6.6 (readme tested WP 4.2.1, ~2015) | — | Injects custom code into site header/footer | **outdated, unused** |
| Image Credits (`DASFSFimage-credits`) | Inactive | 1.1 (readme tested WP 3.6, ~2013) | — | Adds photo credit/attribution fields to images | **outdated, unused** — notable given this is an editorial/publishing site that likely needs photo credits; check whether a modern replacement is needed |
| Q2W3 Post Order (`PPOOOOq2w3-post-order`) | Inactive | 1.2.8 (readme tested WP 3.5.1, ~2013) | — (theme's `functions.php:4` references a `global_posts_ordering` class that doesn't match this plugin's actual class name, `q2w3_post_order` — dead/orphaned code, see footnote) | Drag-and-drop manual post ordering | **outdated, unused, broken-reference** |
| Search box on Navigation Menu (`PPPPPPPPsearch-box-on-navigation-menu`) | Inactive | 1.1 (readme tested WP 3.5.1, ~2013) | — | Adds a search field to nav menus | **duplicate, outdated, unused** — 1 of 3 search-related plugins |
| Soliloquy Lite (`PPPPPPsoliloquy-lite`) | Inactive | 2.1.3 (readme tested WP 3.9, ~2014) | — | Responsive image slider | **duplicate, outdated, unused** — see slider cluster |
| Polldaddy Polls & Ratings (`PPPPpolldaddy`) | Inactive | 2.0.20 (readme tested WP 3.5.2, ~2013) | — | Embeds polls/ratings | **outdated, unused** — Polldaddy was discontinued/folded into Crowdsignal years ago; upstream service may no longer work even if reactivated |
| Facebook Like Button Plugin (`SSFfacebook-like-plugin`) | Inactive | 2.0 (readme version mismatch, shows 4.3; readme tested WP 2.9.2, ~2010) | — | Embeds a Facebook Like button | **duplicate, outdated, unused** — 2 of 3 Facebook Like plugins |
| geeSearch Plus (`SSSgsearch-plus`) | Inactive | 1.4.2 (readme tested WP 4.0, ~2014) | — | Enhanced site search | **duplicate, outdated, unused** — 2 of 3 search plugins |
| Disqus Comment System (`XXXdisqus-comment-system`) | Inactive | 2.84 (readme tested WP 4.0, ~2014) | — | Third-party comment system | **outdated, unused** — moot anyway since `disable-comments` is active |
| Unfiltered MU (`XXXunfiltered-mu`) | Inactive | 1.3.1 (readme tested WP 3.0, ~2010) | — | Grants unfiltered HTML to admins on multisite | **outdated, unused** — site is not multisite, so this has never applied |
| Advanced Cron Manager (`XXadvanced-cron-manager`) | Inactive | 1.4.3 (readme tested WP 4.3, ~2015) | — | GUI for managing WP-Cron events | **outdated, unused** |
| Alpine PhotoTile for Flickr (`XXalpine-photo-tile-for-flickr`) | Inactive | 1.2.5.4 (readme tested WP 3.5.1, ~2013) | — | Embeds Flickr photo tiles | **outdated, unused** |
| Captain Slider (`XXcaptain-slider`) | Inactive | 1.0.6 (readme tested WP 3.5, ~2013) | — | Image/content slider | **duplicate, outdated, unused** — see slider cluster |
| Facebook Like Box — Cardoza (`XXcardoza-facebook-like-box`) | Inactive | 2.8.1 (readme tested WP 3.6.1, ~2013) | — | Embeds a Facebook Like Box widget | **duplicate, outdated, unused** — 3 of 3 Facebook Like plugins |
| Default to GD (`XXdefault-to-gd-master`) | Inactive | 1.0 (readme tested WP 3.5, ~2013) | — | Forces GD image library instead of Imagick | **outdated, unused** |
| WordPress Meta Robots (`xxxxxxwordpress-meta-robotsxxxxxx`) | Inactive | 2.1 (readme tested WP 3.9, ~2014) | — | Per-post `noindex`/`nofollow` meta tag control | **outdated, unused** — SEO-relevant function; if still needed, replace with a modern SEO plugin rather than reactivating this |
| Slack Integration for WordPress (`xxxxxxxslack-integrationxxxxxx`) | Inactive | 1.7.1 (readme tested WP 4.2.2, ~2015) | — | Slack alerts on post publish/update and user login | **duplicate, outdated, unused** — see Slack section below |

## D. Broken / Orphaned Installs (4)

These are not functioning plugins at all — no valid `Plugin Name:` header, or empty/incomplete code. They're dead weight regardless of active status and should simply be deleted.

| Plugin | Status | Version | Used In | Purpose | Flags |
|---|---|---|---|---|---|
| `Login-wall-kwXcO` | Inactive | n/a — its only file, `login_wall.php`, is **0 bytes** | — | Unknown (name suggests a login-wall/paywall gate) | **broken** |
| `google-analytics-for-wordpress` | Inactive | n/a — folder is **completely empty** | — | N/A (was MonsterInsights under an old slug) | **broken** |
| `sdglksdgsd` | Inactive | n/a — no valid plugin header; contains orphaned LivePress-related debris (`livepress-logo.svg`, `livepress-json-ld.php`, a scraper class) distinct from the actual `dsdgggggglivepress` plugin folder | — | N/A — leftover fragments, not a real plugin | **broken** |
| `wp-migrate-db-old` | Inactive | n/a — only leftover compiled `frontend/build-free/` JS/HTML assets remain, no PHP file with a plugin header | — | N/A — superseded by the active `wp-migrate-db` folder | **broken** |

---

## The Slack duplication, in detail

Four Slack-related plugins are installed — one more than the "three duplicates" flagged in the prior manual review:

| Plugin | Status | Capability |
|---|---|---|
| `slack` (Akeda Bagus) v0.6.0 | **Active** | Basic: post-publish + comment notifications only. Author-abandoned since ~2017 (tested WP 4.7.3). |
| `dorzki-notifications-to-slack` v2.0.7 | Inactive | Most capable: core/plugin update alerts, Contact Form 7 integration, WooCommerce orders, failed-login alerts. Tested WP 5.3 (~2019) — still the newest of the three. |
| `xxxxxxxslack-integrationxxxxxx` v1.7.1 | Inactive | Basic: post publish/update + user login. Tested WP 4.2.2 (~2015) — oldest, garbled/soft-disabled folder. |
| `ninja-forms-slack` v1.0 | Inactive | Different purpose, not a duplicate of the above three: only fires on Ninja Forms submissions. Depends on `ninja-forms`, which is also inactive. |

None of the four appear anywhere in the theme (a case-insensitive search for "slack" across the entire theme and mu-plugins returned zero hits) — they're self-contained and hook into WP core events internally, so theme silence doesn't tell you which is actually wired to a live Slack webhook. **The important finding is that the currently active plugin (`slack`) is the least capable and most outdated of the three general-purpose options** — the opposite of what you'd want live. Whichever is genuinely posting to Slack today needs to be confirmed by checking each plugin's own settings screen in wp-admin for a configured webhook URL before deciding what to deactivate.

## Other duplicate clusters

- **Facebook Like Box/Button — 3 plugins**, all inactive, all abandoned (readmes tested WP 2.9–3.6, ~2009–2013): `ASFASFfacebook-like-box`, `SSFfacebook-like-plugin`, `XXcardoza-facebook-like-box`.
- **Sliders — 4 plugins**, all inactive: `ml-slider` (MetaSlider — best-maintained, tested WP 7.0), `easing-slider` (~2016), `XXcaptain-slider` (~2013), `PPPPPPsoliloquy-lite` (~2014).
- **Search — 3 plugins**, all inactive, all abandoned: `search-everything` (~2017), `SSSgsearch-plus` (~2014), `PPPPPPPPsearch-box-on-navigation-menu` (~2013).
- **Twitter embeds — 2 plugins**, both inactive: `custom-twitter-feeds` (current, Smash Balloon) vs `jm-twitter-cards` (Twitter Card meta tags — actually a different function, card meta vs. feed embed, but worth confirming only one is needed).
- **Activity/audit logging — 3 plugins**, all inactive: `simple-history` (best-maintained, tested WP 7.0), `aryo-activity-log` (~2024, tested WP 6.7), `wp-security-audit-log` (tested WP 7.0.2).
- **Cache purging — 3 plugins**, all inactive: `cloudflare`, `sunny` (Cloudflare-purge companion, depends on `cloudflare`), `varnish-http-purge`.
- **File managers — 2 plugins**: `file-manager-advanced` (active) vs `wp-file-manager` (inactive) — same job.
- **Forms — 2 plugins**, both inactive: `contact-form-7` vs `ninja-forms`.
- **DB migration/backup — 2-3 plugins**: `wp-migrate-db` (active) vs `all-in-one-wp-migration` (inactive) vs `better-search-replace` (active, narrower scope) — some overlap but each has a distinct enough use case (environment sync vs. full backup vs. targeted find/replace) that this is lower priority than the others.

## Other cleanup items found during this audit (not plugin removals)

- `functions.php:4` checks `class_exists("global_posts_ordering")`, but no installed plugin defines that class (the similarly-purposed `PPOOOOq2w3-post-order` plugin uses class name `q2w3_post_order` instead). This is permanently dead code — a no-op today, safe to remove.
- `javascript/loadmore.js` fires an AJAX action `be_ajax_load_more` that has no matching `wp_ajax_be_ajax_load_more` handler anywhere in the theme or any plugin — an orphaned/broken AJAX call, unrelated to plugin status but worth fixing alongside the `ajax-load-more` cleanup.

---

## Recommendations, in priority order

### Priority 1 — Security cleanup (do first, low risk/low effort)
1. **Delete the 4 broken/orphaned folders** outright: `Login-wall-kwXcO`, `google-analytics-for-wordpress`, `sdglksdgsd`, `wp-migrate-db-old`. They contain no functioning code and serve no purpose sitting in `wp-content/plugins/`.
2. **Delete the 19 garbled-name (Sucuri-quarantined) plugin folders** in section C. They're already confirmed inactive and cannot be reactivated without also renaming them back — leaving known-quarantined code on disk is unnecessary attack surface for no benefit, and it also removes ~19 rows of noise from any future audit, including the PHP 8.3 compatibility pass.

### Priority 2 — Consolidate duplicate functionality
3. **Slack (highest-priority consolidation):** the currently active plugin is the *worst* of the three general-purpose options. Either switch to `dorzki-notifications-to-slack` (most capable) after confirming its webhook still points somewhere valid, or — given all three are years stale — evaluate replacing all of them with a maintained alternative. Remove whichever isn't kept, plus decide separately whether `ninja-forms-slack` is still needed (it depends on the also-inactive `ninja-forms`).
4. Pick one plugin from each of the other clusters (Facebook Like Box, sliders, search, Twitter embeds, activity logging, cache purging, file managers, forms) and remove the rest. In each case the newest/best-maintained option is already identified above.

### Priority 3 — PHP 8.3 compatibility risk
Every plugin in section C, plus these from section B, either declares no `Requires PHP` minimum at all or was last touched during the PHP 5.x/7.0 era (readme "Tested up to" WP ≤ 5.x): `custom-post-template`, `disable-wysiwyg`, `dsdgggggglivepress`, `easing-slider`, `json-api`, `menu-obfuscator`, `ninja-forms-slack`, `posts-to-posts` (partially — check), `private-content`, `quick-pagepost-redirect-plugin`, `related-posts`, `remove-taxonomy-base-slug`, `search-everything`, `slack`, `sunny`, `term-management-tools`, `toggle-wpautop`, `use-google-libraries`, `useful-banner-manager`, `wp-htaccess-control`. Being inactive today doesn't guarantee it stays that way — if any of these get reactivated after the PHP 8.3 upgrade without a compatibility check, expect fatal errors (deprecated PHP 4-style constructors, removed functions like `each()`, etc., are common failure points in code this old). **`slack` is the one plugin in this list that's currently active** — it should be either replaced or explicitly PHP-8.3-tested before the upgrade, not left as-is.

Plugins already declaring PHP 7.4+ support (Jetpack, Jetpack Boost, Cloudflare, Contact Form 7, Custom Twitter Feeds, Gutenberg, Akismet, All-in-One WP Migration, Query Monitor, Redirection, Varnish/Proxy Cache Purge, WP Retina 2x, WP Security Audit Log, Liveblog, Mailchimp, atec Cache Info, term-management-tools at 7.1, and others noted in the tables above) are comparatively lower-risk for the 8.3 migration.

### Priority 4 — Remove confirmed-unused active plugins
5. `ajax-load-more`, `toggle-wpautop`, and `related-posts` (inactive but worth grouping here) all have theme-built equivalents already in production — the plugin functionality is entirely redundant. `mailchimp` (active) is also unused since the newsletter forms bypass it. Removing the two active ones (`ajax-load-more`, `toggle-wpautop`, `mailchimp`) simplifies the PHP 8.3 testing surface with zero functional loss.

### Footnote-level cleanup (low priority, do opportunistically)
6. Remove the dead `global_posts_ordering` class-check in `functions.php:4` and fix or remove the orphaned `be_ajax_load_more` AJAX call in `loadmore.js` — both are inert today but add confusion for anyone reading the code during the PHP 8.3 migration.
