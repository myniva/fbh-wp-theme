        <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo get_template_directory_uri(); ?>/js/lib/jquery-2.0.2.min.js"><\/script>')</script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        
          ga('create', 'UA-42246762-1', 'floorball-heiden.ch');
          ga('send', 'pageview');
        
        </script>
        <?php
           /* Always have wp_footer() just before the closing </body>
            * tag of your theme, or you will break many plugins, which
            * generally use this hook to reference JavaScript files.
            */
            wp_footer();
        ?>
    </body>
</html>