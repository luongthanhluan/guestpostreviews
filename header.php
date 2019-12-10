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
<html <?php language_attributes(); ?> class="js">
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="profile" href="https://gmpg.org/xfn/11">
        <script src="https://kit.fontawesome.com/22f1a4cafc.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <div id="page" class="site">
            <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'guest-post-reviews'); ?></a>

            <header id="masthead" class="site-header">
                <div class="l-grid">
                    <div id="header_logo_1" class="site-branding page-header__logo" >
                        <?php
                        the_custom_logo();
                        if (is_front_page() && is_home()) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                            <?php
                        else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
                        <?php
                        endif;
                        $guest_post_reviews_description = get_bloginfo('description', 'display');
                        if ($guest_post_reviews_description || is_customize_preview()) :
                            ?>
                            <p class="site-description"><?php echo $guest_post_reviews_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div><!-- .site-branding -->
                </div>


                <nav id="site-navigation" class="main-navigation">

                    <div class="l-grid">
                        <div class="nav_main">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'menu-1',
                                'menu_id' => 'primary-menu',
                            ));
                            ?>
                        </div>
                        <div class="nav_right">
                            <a href="/crm-software-comparison" class=" smt_btn btn">Find CRM Software</a>

                            <a href="#" class="btn-search js-search-btn"><i class="fas fa-search"></i></a>
                        </div>
                    </div>
                </nav><!-- #site-navigation -->
                <div id="js-search" class="search" data-set="search">
                    <form action="<?php echo esc_url(home_url('/')); ?>" class="l-grid js-search-form" >
                        <input type="search" placeholder="<?php echo esc_attr_x('Press enter to search &hellip;', 'placeholder', 'guest-post-reviews') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'guest-post-reviews') ?>" />
                        <button class="btn smt_btn " role="button">Search</button>
                    </form>
                </div>
            </header><!-- #masthead -->

            <div id="content" class="l-grid">
