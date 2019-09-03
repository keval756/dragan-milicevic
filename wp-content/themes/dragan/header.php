<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package dragan-test
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'dragan' ); ?></a>
	 <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="logo">
                        <?php
							the_custom_logo();
							?>
						 <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                    </div>
                    <div class="m-menu">
                        <div class="main-home-menu">
                            <button id="showRight">
                                <span class="bar"></span>
                            </button>
                            <nav class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-right" id="cbp-spmenu-s2">
                            	<?php
									wp_nav_menu( array(
										'theme_location' => 'menu-1',
										'container'       => false,
										'container_id'    => '',
										'menu_id'        => '',
		                                'menu_class'      => '',
		                                'items_wrap'      => '<ul id="%1$s" class="des-menu">%3$s</ul>'
									) );
								?>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="menu">
                    	<?php
							wp_nav_menu( array(
								'theme_location' => 'menu-1',
								'container'       => false,
								'container_id'    => '',
								'menu_id'        => '',
                                'menu_class'      => '',
                                'items_wrap'      => '<ul id="%1$s" class="des-menu">%3$s</ul>'
							) );
						?>
                    </div>
                </div>
            </div>
        </div>
    </header>

