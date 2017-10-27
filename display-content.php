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
} ?>
