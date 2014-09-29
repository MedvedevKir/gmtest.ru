<?php 
  $image_width = '205';
  $image_height = '120';
?>
  </div><!--close content_container-->

<?php 
  if (!is_page('beginner') && !is_page('skilled')) {
    require_once('wp-content/themes/mio/custom_footer.php');
  }
?>


</div><!--close wrapper-->
</div><!--close container-->
</div><!--close wrap_all-->
<?php dynamic_sidebar( 'site-bottom-widget' ); ?>
<?php wp_footer(); ?>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
(function (d, w, c) {
    (w[c] = w[c] || []).push(function() {
        try {
            w.yaCounter22011877 = new Ya.Metrika({id:22011877,
                    webvisor:true,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true});
        } catch(e) { }
    });

    var n = d.getElementsByTagName("script")[0],
        s = d.createElement("script"),
        f = function () { n.parentNode.insertBefore(s, n); };
    s.type = "text/javascript";
    s.async = true;
    s.src = (d.location.protocol == "https:" ? "https:" : "http:") + "//mc.yandex.ru/metrika/watch.js";

    if (w.opera == "[object Opera]") {
        d.addEventListener("DOMContentLoaded", f, false);
    } else { f(); }
})(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="//mc.yandex.ru/watch/22011877" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</body>
<?php 
  if (is_page('beginner') || is_page('skilled')) {
    echo '<footer class="footer_custom"></footer>';
  }
?>
</html>