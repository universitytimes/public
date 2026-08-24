# Active Plugin Usage Review

Investigation date: 2026-08-22
Method: read-only. Plugin source was read to find the exact option/meta keys each plugin actually uses, then the live database was queried via `wp eval` (using WP's own `$wpdb` connection — `wp db query`'s direct mysql-client path was broken on this Local environment due to a socket mismatch) and the active theme (`wp-content/themes/universitytimes`) was grepped for direct dependencies. No options, postmeta, or files were modified, and no plugins were deactivated.

> Note: the request referenced "5 active plugins" but detailed criteria for 4 (Slack, Custom Post Templates, Remove Taxonomy Base Slug, Toggle wpautop). Those are the 4 covered below; flag if a 5th target plugin was intended.

---

## 1. Slack (Akeda Bagus, v0.6.0)

**What was searched**
- Read `slack.php`, `includes/post-type.php`, `includes/post-meta-box.php` to find where this plugin actually stores configuration.
- Correction to the suggested approach: this plugin does **not** use `wp_options` for its webhook config. It registers a private custom post type, `slack_integration`, and stores each integration's settings as a serialized array in postmeta key `slack_integration_setting` (fields: `service_url`, `channel`, `username`, `icon_emoji`, `active`, `events`).
- DB query: `SELECT post_id, meta_value FROM wp_postmeta WHERE meta_key='slack_integration_setting'`, plus `SELECT * FROM wp_posts WHERE post_type='slack_integration'`.
- Also checked `wp_options LIKE '%slack%'` for completeness, and grepped the active theme and `wp-content/mu-plugins/` for `slack_integration`, `wp_slack`, `WP_Slack` — no hits (expected: this plugin fires purely via its own `save_post`/event hooks, no template code needed).

**What was found**
- 4 `slack_integration` posts exist, all `post_status = publish` (this plugin uses publish/draft as its own active/inactive state):
  - Post 43789 ("Post to Social Media") — `active: 1`, real webhook `hooks.slack.com/services/T65S49QCA/...`, fires on `post_published` → `#published`.
  - Post 106249 ("Post to social media") — `active: 1`, real webhook `hooks.slack.com/services/T03PS4VGBJ6/...`, fires on `post_published` → `#published`.
  - Post 39685 ("Pending Review") — `active: (empty/false)`, real webhook configured, would fire on `post_pending_review` → `#copyassignments` if turned back on.
  - Post 43792 (untitled) — `active: (empty/false)`, real webhook configured, `post_pending_review` → `#copyassignments`.
- Two of the four integrations are live and configured with genuine `hooks.slack.com` incoming webhook URLs, wired to the `post_published` event.
- The `wp_options` rows matching `%slack%` (`slack_options`, `slack_webhook`, `slack_version` = 2.0.7, etc.) belong to a **different, unrelated Slack plugin** (option shape/version don't match this one) — almost certainly leftover from a previously installed integration, not from this plugin. `slack_webhook` there is empty, but that's irrelevant to this plugin's verdict.

**Verdict: GENUINELY IN USE**

**Recommendation: keep.** Two integrations are active with real webhook URLs and are firing live Slack notifications to `#published` on every published post. Deactivating stops real, currently-functioning team notifications — there's no front-end/visitor-facing impact, but it does have a real operational effect for the editorial team. If Slack notifications are no longer wanted, deactivate deliberately (not as unused-plugin cleanup) — the workflow behind it is real.

---

## 2. Custom Post Templates (Simon Wheatley, v1.5)

**What was searched**
- Read `custom-post-templates.php`: meta key is `custom_post_template` (confirmed directly in source: `$this->tpl_meta_key = 'custom_post_template';`). It hooks `single_template` to swap in a theme file matching that meta value, and expects theme templates to declare a `Template Name Posts:` header (a Posts-specific analog of core's `Template Name:` for pages).
- DB query: `SELECT COUNT(*) FROM wp_postmeta WHERE meta_key='custom_post_template' AND meta_value != ''`, then a `GROUP BY meta_value` and `GROUP BY post_status` breakdown.
- `grep -rl "Template Name Posts" wp-content/themes/` to confirm the active theme actually ships templates in the convention this plugin expects.
- Spot-checked one real post (ID 37450, using `single-podcast.php`) and confirmed the template file exists in the active theme.

**What was found**
- **286 total postmeta rows** with a non-empty `custom_post_template` value.
- Breakdown by post status: **247 `publish`**, 37 `draft`, 2 `private`.
- 34 theme files in `wp-content/themes/universitytimes/` carry the `Template Name Posts` header this plugin looks for (e.g. `single-podcast.php`, `single-dearfreshermenew.php` (46 posts), `single-societyguests.php` (9 posts), several `single-livebl0g-template-elections*.php` files, `single-trinity20*.php`, etc.) — a live, actively maintained library of custom single-post layouts.
- Most-used template: `tpl-full_width.php` (110 posts), `single-dearfreshermenew.php` (46), `single-liveblog...` variants, etc.

**Verdict: GENUINELY IN USE — extensively.**

**Recommendation: keep.** 247 published, live posts render through an alternate `single-*.php` template selected by this plugin, not the theme's default `single.php`. Deactivating would silently drop every one of those posts back to the default template, visibly changing layout for hundreds of live pages (liveblogs, election coverage, podcast pages, special features, etc.). Not safe to remove or deactivate.

---

## 3. Remove Taxonomy Base Slug (Alexandru Vornicescu, v2.1)

**What was searched**
- Read `remove-taxonomy-base-slug.php` and `actions.php`. The plugin is a no-op unless its option `remove_taxonomy_base_slug_settings_what_taxonomies` (an array of taxonomy slugs) is populated — its rewrite filters are hooked on `init` but do nothing for taxonomies not in that list.
- Checked the option: `get_option('remove_taxonomy_base_slug_settings_what_taxonomies')`.
- Checked the live, saved rewrite rules (`get_option('rewrite_rules')`) for evidence the base slug is actually stripped, and called `get_term_link()` on a real term to see the real, generated permalink.
- Grepped the active theme for hardcoded `/section/`-prefixed URLs that would indicate a dependency on (or conflict with) this plugin's rewriting.

**What was found**
- The option is set to `['section']` — a custom taxonomy, not core `category`/`post_tag`. (Core categories/tags are unaffected by this plugin on this site.)
- `section` is a real, actively-used public taxonomy with real terms: News (4,838 posts), Radius (2,678), Comment & Analysis (2,595), Sport (1,106), In Focus (760), Magazine (417), Gaeilge (24), Blogs.
- The live `rewrite_rules` option confirms the base is genuinely stripped: rules exist as bare `(news)/?$ → index.php?section=news` etc., with **no** `section/` prefix — this is not the default WordPress rewrite shape for a taxonomy, it's this plugin's output.
- `get_term_link('news', 'section')` returns `https://…/news/`, confirmed live and base-slug-free.
- No hardcoded `/section/`-prefixed URLs found in the theme — the theme relies on `get_term_link()`/permalinks generated dynamically, which is exactly what this plugin is altering.

**Verdict: GENUINELY IN USE.**

**Recommendation: keep.** This plugin is responsible for the actual, current URL structure of the site's main content sections (News, Sport, Opinion, etc. — thousands of live posts under these terms). Deactivating would revert every one of those URLs to `/section/news/`-style paths, breaking existing inbound/internal links, bookmarks, and search-indexed URLs (302/404s) for the site's primary navigation taxonomy. Not safe to remove.

---

## 4. Toggle wpautop (Linchpin & Jonathan Desrosiers, v1.3.0)

**What was searched**
- Read `toggle-wpautop.php`. Per-post toggle meta key is `_lp_disable_wpautop`; when set (truthy), the plugin removes the `wpautop`/`the_excerpt` auto-formatting filter for that post's render pass (reset again at `loop_end`).
- DB query: `SELECT COUNT(*) FROM wp_postmeta WHERE meta_key='_lp_disable_wpautop' AND meta_value != ''`, plus a `GROUP BY post_status, meta_value` breakdown.
- Also checked its two related options: `lp_toggle_wpautop_settings` (which post types show the toggle at all) and `lp_toggle_wpautop_auto` (auto-disable for new posts).

**What was found**
- **14 posts** have `_lp_disable_wpautop = 1`: **11 published**, 3 draft.
- `lp_toggle_wpautop_settings` = `['post', 'page', 'ut_radius_event_type', 'staff', 'custom_type']` — the toggle UI is exposed on 5 post types, confirming it's configured beyond plugin defaults (deliberately extended to custom post types, not just left at activation defaults).
- `lp_toggle_wpautop_auto` is not set (no blanket auto-disable — usage is deliberate, per-post).

**Verdict: GENUINELY IN USE — modestly, but real.**

**Recommendation: keep**, or at minimum **do not deactivate without reviewing those 11 published posts first**. Those posts were deliberately marked to skip WordPress's automatic `<p>`/`<br>` insertion (typically because their content already has custom HTML/markup that would be mangled by wpautop). Deactivating would silently re-enable wpautop on those 11 live posts and could visibly break their formatting. Safe to remove only after manually checking/fixing formatting on those specific posts.

---

## Summary

| Plugin | Verdict | Deactivation impact | Recommendation |
|---|---|---|---|
| Slack | Genuinely in use | No front-end impact; stops real Slack notifications to editorial team | Keep |
| Custom Post Templates | Genuinely in use (extensive) | 247 published posts revert to default template | Keep |
| Remove Taxonomy Base Slug | Genuinely in use | Breaks/reshapes live URLs for entire site taxonomy (thousands of posts) | Keep |
| Toggle wpautop | Genuinely in use (modest) | 11 published posts may get formatting mangled by re-enabled wpautop | Keep — review the 11 posts before touching |

None of the four plugins investigated are "switched on with no real effect" — each has a measurable, currently-live effect on real content or a real workflow, so none are safe to deactivate/remove without a visible consequence.
