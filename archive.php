<?php get_header(); ?>

<section id="content" role="main">

	<?php if (have_posts()) : ?>

		<?php if (is_category()) { ?>
			<h2>Archiv f&uuml;r <?php single_cat_title(); ?></h2>
		<?php } if (is_tag()) { ?>
			<h2>Archiv f&uuml;r <?php single_tag_title(); ?></h2>
		<?php } if (is_year()) { ?>
			<h2>Archiv f&uuml;r <?php the_time(__('Y', '')) ?></h2>
		<?php } if (is_month()) { ?>
			<h2>Archiv f&uuml;r <?php the_time(__('F Y', '')) ?></h2>
		<?php } if (is_day()) { ?>
			<h2>Archiv f&uuml;r <?php the_time(__('d. F Y', '')) ?></h2>
		<?php } ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h3 class="archive" ><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Link zu %s', ''), the_title_attribute('echo=0')); ?>"><?php the_title(); ?></a></h3>

				<div class="entry">
					<?php the_excerpt(); ?>
					<a class="weiterlesen" href="<?php the_permalink() ?>" rel="bookmark" title="<?php printf(__('Link zu %s', ''), the_title_attribute('echo=0')); ?>">&rsaquo; Artikel lesen</a>
				</div><!-- entry -->
				
			</article><!-- post -->

		<?php endwhile; ?>
		<?php if ( $wp_query->max_num_pages > 1 ) : ?>
			<nav class="pagination">
				<div class="alignleft"><?php next_posts_link(__('&Auml;ltere Artikel', '')) ?></div><!-- alignleft -->
				<div class="alignright"><?php previous_posts_link(__('Neuere Artikel', '')) ?></div><!-- alignright -->
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