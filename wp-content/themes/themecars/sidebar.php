<div class="col-lg-3 col-sm-3">
    <nav>

        <a href="<?php echo home_url()?>" title="На главную"><img src="<?php bloginfo('template_url')?>/images/Logo.jpg" title="Главная" alt="лого" /></a>

        <div class="menu_bar">
            <button class="icon_menu visible-xs"><i class="fa fa-bars" aria-hidden="true"></i>
            </button>
            <ul>
                <?php
            $massiv_vhodnih_parametrov = array(
            'theme_location' => 'menu',
            'container' => false,
            'echo' => false,
            'depth' => 0,
            'link_before' => '<p>',
            'link_after' => '</p>',
            );
            print strip_tags(wp_nav_menu($massiv_vhodnih_parametrov), '<li>, <a>, <p>');
            ?>
            </ul>
        </div>

        <div id="map">
            <a class="fancybox" href="<?php bloginfo('template_url')?>/images/Map.jpg"><img src="<?php bloginfo('template_url')?>/images/Map.jpg" /></a>
        </div>
    </nav>
</div>