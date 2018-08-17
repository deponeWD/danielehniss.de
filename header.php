<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
<meta charset="<?php bloginfo('charset'); ?>" >
<meta name="referrer" content="no-referrer">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

<title><?php wp_title(' &middot;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<meta name="author" content="Daniel Ehniss" />
<?php if (is_single()) { ?>
  <meta name="keywords" content="<?php $post_tags = get_the_tags(); if ( $post_tags ) { foreach( $post_tags as $tag ) { echo $tag->name . ', '; } } ?> Daniel Ehniss, Ehniss, Karlsruhe, Theologie, Soziologie, Dekonstruktion, Philosophie, Emergenz, Emergent, emerging Church, Web2.0, Web, Kubik, Gerechtigkeit, Nachhaltigkeit" />
  <?php } else { ?>
    <meta name="keywords" content="Blog, Daniel Ehniss, Ehniss, Karlsruhe, Theologie, Soziologie, Dekonstruktion, Philosophie, Emergenz, Emergent, emerging Church, Web2.0, Web, Kubik, Gerechtigkeit, Nachhaltigkeit" />
  <?php } ?>
<?php if (has_excerpt()) { ?>
    <meta name="description" content="<?php echo get_the_excerpt(); ?>" />
<?php } else { ?>
    <meta name="description" content="Hallo, ich bin Daniel Ehniss, ein Kaffeeliebhaber und Web Designer in Karlsruhe. Hier findest Du mein privates Blog." >
<?php } ?>

<link rel="me" href="https://twitter.com/depone">
<link rel="me" href="https://instagram.com/deponev2">
<link rel="me" href="https://www.facebook.com/danielehniss">
<link rel="me" href="https://mastodon.social/@depone">
<link rel="pgpkey" href="https://danielehniss.de/up/daniel.asc">

<link rel="authorization_endpoint" href="https://indieauth.com/auth">
<link rel="token_endpoint" href="https://tokens.indieauth.com/token">

<link rel="apple-touch-icon" href="/apple-touch-icon.png">
<link rel="icon" href="/favicon.ico">

<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >


<?php
  // Add Atom-Feed for webmentions and Mastodon
  echo "<link rel='alternate' type='application/atom+xml' href='https://danielehniss.de/feed/atom' />";
?>

<!--[if IE]>
  <script src="<?php bloginfo('template_url'); ?>/assets/js/html5.js" ></script>
<![endif]-->

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<section id="page">

<header role="banner">
    <h1><a href="<?php echo get_option('home'); ?>/"><span><?php bloginfo('name'); ?></span></a></h1>
    <p class="description">
        <?php bloginfo('description'); ?>
    </p><!-- description -->

</header>
