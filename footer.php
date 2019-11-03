<?php if (has_nav_menu('bottom_navigation')): ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark footer mt-5" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
            <?php
            wp_nav_menu( array(
                'theme_location'  => 'bottom_navigation',
                'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                'container'       => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id'    => 'bottom_navigation',
                'menu_class'      => 'navbar-nav mr-auto ',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            ) );
            ?>
            <?php echo get_theme_mod('1902_footerText'); ?>
        </div>
    </nav>
<?php endif; ?>
<?php wp_footer(); ?>

</body>
</html>
