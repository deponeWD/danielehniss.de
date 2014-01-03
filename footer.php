<hr /><!-- Trennlinie -->

<footer role="contentinfo">
    <nav id="mainnav" >
        <ul>
            <?php wp_list_pages('title_li=&exclude=143'); ?>
        </ul>
    </nav>
    <div class="suchfeld"><?php get_search_form(); ?></div>
    <hr />
</footer><!-- footer -->
</section><!-- page -->

<?php wp_footer(); ?>

<?php if (is_single()) { ?>
        <script src="http://code.jquery.com/jquery-1.7.2.min.js" ></script>
        <script src="./wp-content/themes/daniel14/js/jquery.oembed.min.js" ></script>
        
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

<script src="./wp-content/themes/daniel14/js/jquery.oembed.min.js" ></script>
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