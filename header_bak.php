<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Guest_Post_Reviews
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="js js-nav-open">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
        <script src="https://kit.fontawesome.com/22f1a4cafc.js" crossorigin="anonymous"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'guest-post-reviews' ); ?></a>
	<header> 
             <!--id="masthead" class="site-header"-->
            <div class="page-header">
        <div class="l-grid">
            	<div class="site-branding">
                    <a id="header_logo_1" class="page-header__logo" href="<?php echo site_url()?>">    <img src="<?php
                                $custom_logo_id = get_theme_mod('custom_logo');
                                $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                                echo $image[0];
                                ?>" > 
                                </a>
			<?php
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a id="header_logo_1" class="page-header__logo"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a  id="header_logo_1" class="page-header__logo"  href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$guest_post_reviews_description = get_bloginfo( 'description', 'display' );
			if ( $guest_post_reviews_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $guest_post_reviews_description; /* WPCS: xss ok. */ ?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->
                <div class="page-header__advert" style="">

                    <div style="border: 0pt none; width: 728px; height: 90px; background: #008000; display: block"></div>


                </div>


        </div><!-- l-grid -->
        
        
    </div>
	<nav id="js-nav" class="nav" role="navigation">
            <div class="l-grid">
                <a id="mobile_header_logo_2" class="nav__logo" href="/">      <img src="<?php
                    $custom_logo_id = get_theme_mod('custom_logo');
                    $image = wp_get_attachment_image_src($custom_logo_id, 'full');
                    echo $image[0];
                    ?>" > 

                </a>

                <div class="nav__utils">
                    <a href="#" class="nav__utils__menu-btn js-nav-btn">
                        <i class="i-menu"></i>
                        <i class="i-clear"></i>
                    </a>

                    <a href="/crm-software-comparison" class="btn">Find CRM Software</a>
                    <a href="#" class="btn-search js-search-btn"><span class="visuallyhidden"><i class="fas fa-search"></i></span></a>
                </div>

                <div class="nav__links js-nav-drawer">

            <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //  esc_html_e( 'Primary Menu', 'guest-post-reviews' );  ?></button>-->
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu-1',
                        'menu_id' => 'primary-menu',
                    ));
                    ?>

                </div>


            </div><!-- l-grid -->
    </nav>
            <!--End Nav-->
            <div id="js-search" class="search" >

                <form action="<?php echo site_url('/search') ?>" class="l-grid js-search-form">
                    <ol>
                        <li>
                            <label for="search">Search</label>
                            <input type="text" id="search" name="search" placeholder="<?php printf(esc_html__('Search this site', 'guest-post-reviews')) ?>">
                        </li>
                        <li>
                            <button class="btn" role="button"><?php printf(esc_html__('Search','guest-post-reviews')) ?></button>
                        </li>
                    </ol>
                </form>

            </div>
	<!--END SEARCH-->
	</header><!-- #masthead -->

	<div id="content" class="site-content l-container">
            
      
