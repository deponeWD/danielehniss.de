
<footer role="contentinfo">
    <address class="vcard h-card not-yet-ready">
      <p>Hier schreibt <a href="<?php echo get_option('home'); ?>" class="url u-url fn p-name" rel="me">Daniel Ehniss</a>, <span class="role p-role">Vater</span> und <span class="title p-job-title">Webdesigner</span>, der in <span class="adr p-adr"><span class="locality p-locality">Karlsruhe</span>, <span class="country-name p-country-name">Deutschland</span> lebt und arbeitet</span>.</p>
      <p>Neben diesem Blog findest Du mich auch auf <a href="https://twitter.com/depone" rel="me">Twitter</a>, <a href="https://mastodon.social/@depone" rel="me">Mastodon</a>, <a href="https://instagram.com/deponev2" rel="me">Instagram</a> und <a href="https://facebook.com/danielehniss" rel="me">Facebook</a>.</p>
    </address>
    <nav id="footer-nav" class="nav--main">
        <ul>
            <li class="page-item"><a href="https://danielehniss.de/feed/" title="RSS Feed abonnieren?" >Feed</a></li>
            <?php wp_list_pages('title_li=&exclude=143'); ?>
        </ul>
    </nav>
    <div class="suchfeld"><?php get_search_form(); ?></div>
    <p class="cc">Lizenz: <a href="http://creativecommons.org/licenses/by-sa/4.0/deed.de" title="Umgangssprachliche Erkl&auml;rung der Lizenz des Inhalts dieses Blogs" target="_blank" >BY-SA Creative Commons</a>, Daniel Ehniss.</p>
</footer><!-- footer -->
</section><!-- page -->

<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/embed-videos.js" ></script>
<script>
  // Register our service-worker
  if (navigator.serviceWorker) {
      navigator.serviceWorker.register('/serviceworker.js', {
          scope: './'
      });
      window.addEventListener('load', function() {
          if (navigator.serviceWorker.controller) {
              navigator.serviceWorker.controller.postMessage({'command': 'trimCaches'});
          }
      });
  }
</script>
</body>
</html>
