
<footer role="contentinfo">
    <address class="vcard h-card not-yet-ready">
      Hier schreibt <a href="<?php echo get_option('home'); ?>" class="url u-url fn p-name" rel="me">Daniel Ehniss</a>, <span class="role p-role">Vater</span> und <span class="title p-job-title">Webdesigner</span>, der in <span class="adr p-adr"><span class="locality p-locality">Karlsruhe</span>, <span class="country-name p-country-name">Deutschland</span> lebt und arbeitet</span>.
    </address>
    <nav id="mainnav" >
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

<?php if (is_single()) { ?>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-1.11.0.min.js" ></script>
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.oembed.min.js" ></script>

        <script>
            if (window.navigator.standalone == false) {
                window.scrollTo(0, 1);
            }
            jQuery(document).ready(function() {
                jQuery('a.vimeo').click(function() {
                    jQuery(this).oembed(null,
                    {
                    embedMethod: "fill",
                    maxWidth: 640,
                    vimeo: { autoplay: true, portrait: false, title: false, byline: false, color: "009900" }
                    });
                    jQuery(this).addClass('loaded');
                    return false;
                });
                jQuery('a.youtube').click(function() {
                    jQuery(this).oembed(null,
                    {
                    embedMethod: "fill",
                    maxWidth: 640,
                    });
                    jQuery(this).addClass('loaded');
                    return false;
                });
            });
        </script>

<?php } else { ?>

<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.oembed.min.js" ></script>
        <script type="text/javascript" >
            if (window.navigator.standalone == false) {
                window.scrollTo(0, 1);
            }
            jQuery(document).ready(function() {
                jQuery('a.vimeo').click(function() {
                    jQuery(this).oembed(null,
                    {
                    embedMethod: "fill",
                    maxWidth: 640,
                    vimeo: { autoplay: false, portrait: false, title: false, byline: false, color: "009900" }
                    });
                    jQuery(this).addClass('loaded');
                    return false;
                });
                jQuery('a.youtube').click(function() {
                    jQuery(this).oembed(null,
                    {
                    embedMethod: "fill",
                    maxWidth: 640,
                    });
                    jQuery(this).addClass('loaded');
                    return false;
                });
            });
        </script>
<?php } ?>

</body>
</html>
