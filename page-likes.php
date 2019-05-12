<?php /*
** Template Name: Likes
*/ ?>
<?php get_header(); ?>

<section id="content" role="main">

	<?php
		$args = array(
			'cat' => '247,488',
			'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1 ), // number of posts per page is set in settings > read
		);

		query_posts($args);

		if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class('h-entry'); ?> id="post-<?php the_ID(); ?>">
				<?php if (has_category('instapaper')) { ?>
					<h2 class="p-name"><span class="visually-hidden">Likes</span> <a class="u-url" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
					<div class="entry">
						<?php get_template_part( 'display-content' ); ?>
					</div><!-- entry -->
					<p class="postmetadata">Ver&ouml;ffentlicht am <?php the_time(__('d.m.Y', '')) ?> von <?php the_author() ?> <?php edit_post_link(__('bearbeiten', ''), '(', ') '); ?> &middot; <?php comments_popup_link(__('Reagiere darauf', ''), __('1 Reaktion', ''), __('% Reaktionen', ''), '', __('Kommentare geschlossen', '') ); ?></p>
				<?php } else { ?>
					<?php if ( has_post_format( 'image' )) { ?>
						<div class="entry entry--image">
							<a class="u-url" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('large', ['class' => 'size-full']); ?></a>
						</div>
					<?php } else { ?>
						<h2 class="p-name"><a class="u-url" href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<div class="entry">
							<?php get_template_part( 'display-content' ); ?>
						</div><!-- entry -->
					<?php } ?>
					<p class="postmetadata">Ver&ouml;ffentlicht am <?php the_time(__('d.m.Y', '')) ?> von <?php the_author() ?> <?php edit_post_link(__('bearbeiten', ''), '(', ') '); ?> &middot; <?php comments_popup_link(__('Reagiere darauf', ''), __('1 Reaktion', ''), __('% Reaktionen', ''), '', __('Kommentare geschlossen', '') ); ?></p>
				<?php }?>
			</article><!-- post -->

		<?php endwhile; ?>
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav class="pagination">
				<div class="alignleft"><?php next_posts_link(__('&Auml;ltere Eintr&auml;ge', '')); ?></div><!-- alignleft -->
				<div class="alignright"><?php previous_posts_link(__('Neuere Eintr&auml;ge', '')); ?></div><!-- alignright -->
			</nav><!-- pagination -->
		<?php endif; ?>

	<?php else : ?>

	<article class="post" >
		<h2>Nichts gefunden</h2>
		<div class="entry" >
		<p>Wir haben leider an dieser Stelle nichts f&uuml;r dich gefunden, bitte nutze die Navigation oder das Suchfeld um zu den von dir gew&uuml;nschten Inhalten zu gelangen.</p>
		</div><!-- entry -->
    </article>

	<?php endif; ?>

	</section><!-- content -->

<?php get_footer(); ?>
