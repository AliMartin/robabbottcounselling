<?php
// $Id: aggregator-feed-source.tpl.php,v 1.1 2011/01/05 16:22:28 alexweber Exp $

/**
 * @file
 * Default theme implementation to present the source of the feed.
 *
 * The contents are rendered above feed listings when browsing source feeds.
 * For example, "example.com/aggregator/sources/1".
 *
 * Available variables:
 * - $source_icon: Feed icon linked to the source. Rendered through
 *   theme_feed_icon().
 * - $source_image: Image set by the feed source.
 * - $source_description: Description set by the feed source.
 * - $source_url: URL to the feed source.
 * - $last_checked: How long ago the feed was checked locally.
 *
 * @see template_preprocess()
 * @see template_preprocess_aggregator_feed_source()
 */
?>
<header class="feed-source">
  <?php print $source_icon; ?>
  <?php print $source_image; ?>
  <?php if ($source_description): ?>
    <div class="feed-description">
      <?php print $source_description; ?>
    </div>
  <?php endif; ?>
  <p class="feed-url">
    <em><?php print t('URL:'); ?></em> <a href="<?php print $source_url; ?>"><?php print $source_url; ?></a>
  </p>
  <p class="feed-updated">
    <em><?php print t('Updated:'); ?></em> <?php print $last_checked; ?>
  </p>
</header><!-- /.feed-source -->
