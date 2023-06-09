<?php
// $Id: aggregator-item.tpl.php,v 1.1 2011/01/05 16:22:28 alexweber Exp $

/**
 * @file
 * Default theme implementation to format an individual feed item for display
 * on the aggregator page.
 *
 * Available variables:
 * - $feed_url: URL to the originating feed item.
 * - $feed_title: Title of the feed item.
 * - $source_url: Link to the local source section.
 * - $source_title: Title of the remote source.
 * - $source_date: Date the feed was posted on the remote source.
 * - $content: Feed item content.
 * - $categories: Linked categories assigned to the feed.
 *
 * @see template_preprocess()
 * @see template_preprocess_aggregator_item()
 */
?>
<article class="feed-item">

  <header>
    <h3>
      <a href="<?php print $feed_url; ?>"><?php print $feed_title; ?></a>
    </h3>
    <p class="submitted">
      <?php if ($source_url) : ?>
        <a href="<?php print $source_url; ?>" class="feed-item-source"><?php print $source_title; ?></a> - 
      <?php endif; ?>
      <span class="feed-item-date"><?php print $source_date; ?></span>
    </p>
  </header>

  <?php if ($content) : ?>
    <div class="content">
      <?php print $content; ?>
    </div>
  <?php endif; ?>

  <?php if ($categories): ?>
    <footer>
      <p class="categories"><?php print t('Categories'); ?>: <?php print implode(', ', $categories); ?></p>
    </footer>
  <?php endif; ?>

</article><!-- /.feed-item -->
