<nav id="primary-navigation" class="site-navigation" role="navigation">
    <?php wp_nav_menu( array( 'theme_location' => 'left_menu', 'menu_class' => 'nav-menu' ) ); ?>
<?php if ( get_theme_mod( 'mytheme_logo' ) ) : ?>
        <a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'mytheme_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>'></a>
<?php else : ?>
   
    <div class="logo">
            <img src="./img/Khotcher-Logo-Final.png" alt="" />
          </div> 
 
<?php endif; ?>
    <?php wp_nav_menu( array( 'theme_location' => 'right_menu', 'menu_class' => 'nav-menu' ) ); ?>
    </nav>