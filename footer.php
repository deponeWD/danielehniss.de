
<footer role="contentinfo">
    <address class="vcard h-card not-yet-ready">
      <a href="<?php echo esc_url( home_url('/') ); ?>" itemprop="url" class="u-url url uid"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/depone-2021.jpg" class="u-photo avatar--header" alt="Portrait von Daniel Ehniss"><span class="visually-hidden"><?php bloginfo('name'); ?></span></a>
      <p class="p-note">Hier schreibt <a href="<?php echo get_option('home'); ?>" class="fn p-name" rel="me">Daniel Ehniss</a>, <span class="role p-role">Vater</span> und <span class="title p-job-title">Webdesigner</span>, der in <span class="adr p-adr"><span class="locality p-locality">Karlsruhe</span>, <span class="country-name p-country-name">Deutschland</span></span> lebt und arbeitet.</p>
      <p>Neben diesem Blog findest Du mich auch auf <a href="https://twitter.com/depone" class="u-url" rel="me">Twitter</a> und <a href="https://chaos.social/@depone" rel="me">Mastodon</a>.</p>
    </address>
    <nav id="footer-nav" class="nav--main">
        <ul>
            <li class="page-item"><a href="https://danielehniss.de/feed/" title="RSS Feed abonnieren?" >Feed</a></li>
            <?php wp_list_pages('title_li=&exclude=143'); ?>
        </ul>
    </nav>
    <div class="suchfeld"><?php get_search_form(); ?></div>
    <p class="cc">Lizenz: <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.de" title="Umgangssprachliche Erkl&auml;rung der Lizenz des Inhalts dieses Blogs" target="_blank" rel="noreferrer">BY-SA Creative Commons</a>, Daniel Ehniss.</p>
</footer><!-- footer -->
</section><!-- page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/embed-videos.js" ></script>
<script>
  const homeURL = "<?php echo get_option('home'); ?>";
  const swPath = homeURL + '/serviceworker.js';
  // Register our service-worker
  if (navigator.serviceWorker) {
      navigator.serviceWorker.register(swPath);
      window.addEventListener('load', function() {
          if (navigator.serviceWorker.controller) {
              navigator.serviceWorker.controller.postMessage({'command': 'trimCaches'});
          }
      });
  }
</script>
</body>
</html>
