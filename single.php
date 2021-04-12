<?php get_header(); ?>

<section id="content" role="main">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class('h-entry'); ?> id="post-<?php the_ID(); ?>">
				<h2 class="p-name"><?php the_title(); ?></h2>
				<div class="entry e-content">
					<?php get_template_part( 'display-content' ); ?>
				</div><!-- entry -->
				<div class="entry-meta">
					<address class="byline">
						<span class="author p-author h-card hcard vcard" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/depone-2021.jpg" class="avatar avatar-100 photo u-photo">
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

		<nav class="pagination">
			<div class="alignleft"><?php previous_post_link('%link',__('%title', '')); ?></div><!-- alignleft -->
			<div class="alignright"><?php next_post_link('%link',__('%title', '')); ?></div><!-- alignright -->
		</nav><!-- pagination -->

		<?php comments_template( '', true ); ?>

	<?php else : ?>

<article class="post" >
		<h2>Nichts gefunden</h2>
		<div class="entry" >
		<p>Wir haben leider an dieser Stelle nichts f&uuml;r dich gefunden, bitte nutze die Navigation oder das Suchfeld um zu den von dir gew&uuml;nschten Inhalten zu gelangen.</p>
    	<?php get_search_form(); ?>
		</div><!-- entry -->
        </article>

	<?php endif; ?>

	</section><!-- content -->

<?php get_footer(); ?>
