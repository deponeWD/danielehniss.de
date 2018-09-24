<?php get_header(); ?>

<section id="content" role="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class('h-entry'); ?> id="post-<?php the_ID(); ?>">
				<?php if ( has_post_format( 'image' )) { ?>
					<div class="entry entry--image">
						<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_post_thumbnail('large', ['class' => 'size-full']); ?></a>
					</div>
				<?php } else { ?>
					<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>

					<div class="entry">
						<?php get_template_part( 'display-content' ); ?>
					</div><!-- entry -->
				<?php } ?>
				<div class="entry-meta hcard h-card">
					<address class="byline">
						<span class="author p-author vcard" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
							<?php echo get_avatar( get_the_author_meta( 'ID' ), 100, null, null, array( 'class' => array( 'u-photo' ))); ?>
							<span class="description">Ver&ouml;ffentlicht von</span>
							<a class="url uid u-url u-uid fn p-name" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ); ?>" title="View all posts by <?php the_author(); ?>" rel="author" itemprop="url">
								<span itemprop="name"><?php the_author(); ?></span>
							</a>
						</span>
					</address>
					<span class="conjunction">am</span>
					<a href="<?php the_permalink(); ?>" rel="bookmark" class="url u-url"><time class="entry-date updated published dt-updated dt-published" datetime="<?php the_time(__('c', '')); ?>" itemprop="dateModified datePublished"><?php the_time(__('d.m.Y', '')); ?></time></a>
					<?php printf(__(' in %s', ''), get_the_category_list(', ')); ?>.
					<?php edit_post_link(__('bearbeiten', ''), '(', ') '); ?>
				</div>
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
