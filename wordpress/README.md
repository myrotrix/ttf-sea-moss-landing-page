# TTF BFCM 2026 — WordPress integration (review only)

## Status
Development branch, **not deployed**. Uses existing TTF BFCM design preview as its source. No production checkout changes.

### Why a standalone WordPress plugin?
- GitHub tracks changes and packages versioned WordPress builds.
- WordPress serves the page on the **same domain** as WooCommerce/Bolt.
- The plugin adds one optional, manually selectable page template; no global header/cart/checkout hooks.
- Current page is static to prevent orders while 40–50% rules are unapproved.

## Build
A GitHub Action packages the `wordpress/` directory into `ttf-bfcm-preview.zip`. No automatic production deployment.

## Install on WordPress **staging only**
1. Download the zip from the GitHub Actions build artifact.
2. In the STAGING WordPress dashboard, go to Plugins → Add New → Upload Plugin and install the ZIP, then activate it.
3. Create a new DRAFT WordPress Page titled `TTF | BFCM 2026 | Review`.
4. Choose the page template `TTF BFCM Landing (review only)`.
5. Preview as a logged-in administrator. Do not publish or point live traffic to it until approved.
6. Review desktop/mobile design and check images. Do not test purchasing with this static design preview.

## Technical restrictions
- The source HTML's original WooCommerce/checkout scripts are intentionally stripped for this review.
- Forms and product buttons are disabled; all checkout/cart anchors are redirected to a page section.
- No payment processing, discount creation, cart writes, or WooCommerce integration is enabled.
- The 50% qualifier, eligibility, stacking and free-shipping criteria are NOT final.
- The 40% and 50% presentation does not constitute an active offer.
- The template is isolated and does not replace the active homepage or existing TTF checkout.
- The current HTML has its own header and sticky preview strip; do not inject another global header/drawer.
- Real WooCommerce/cart/Bolt integration should be added only after approved offers, staging end-to-end tests and a separate code review.

## Gate before production
Approve campaign qualification/exclusions, accurate prices, shipping threshold calculations, policies, product mappings and accessible mobile layout. Confirm single Woo/Bolt route and pass test orders.

## Ownership
Sam: final commercial/launch approval. Hax: code and technical implementation. Iris: creative review. Rahul/Bolt: production integration verification.
