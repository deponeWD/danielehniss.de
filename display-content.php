<?php if ( has_post_format( 'quote' )) { ?>
  <blockquote>
    <?php
      // Display quote
      the_content(__('weiterlesen &rarr;', ''));
      // Add source to quote
      $sourceName = get_post_meta( get_the_ID(), 'Name der Quelle', true );
      $sourceLink = get_post_meta( get_the_ID(), 'Link zur Quelle', true );

      if (! empty($sourceName)) {
          echo "<p class='source'><small>";
            if ( ! empty( $sourceLink ) ) {
              echo "<a href='" . $sourceLink . "' title='Link zu " . strip_tags($sourceName) . "' target='_blank'>" . $sourceName . "</a>";
            } else {
              echo $sourceName;
            }
          echo "</small></p>";
    } ?>
  </blockquote>
<?php } else {
  the_content(__('weiterlesen &rarr;', ''));

  $syndication_links = get_post_meta( get_the_ID(), 'Syndication Link' );
  if ($syndication_links) {
    echo '<ul class="visually-hidden nols posse">';
    foreach ($syndication_links as $syndication_link) {
      echo '<li class="posse-item"><a class="u-syndication syn-link" rel="syndication" href="'. esc_url($syndication_link) .'">'. esc_url($syndication_link) .'</a></li>';
    }
    echo '</ul>';
  }
} ?>
