<?php
wp_nav_menu( array(
    'menu'              => 'primary',  //Desired menu. Accepts a menu ID, slug, name, or object.
    'depth'             => 2,
    'container'         => '', //Whether to wrap the ul, and what to wrap it with Default 'div'.
    'container_class'   => '', //Class that is applied to the container.
    'menu_class'        => 'navbar-nav m-auto',
    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    'walker'            => new wp_bootstrap_navwalker())
);
