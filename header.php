<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package parallax
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

<body <?php body_class(); ?> id="main">
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'parallax' ); ?></a>


    <!-- header -->
    <header>
        <div class="container"><!-- container -->
            <div class="row"><!-- row -->
                <a href="#" class="logo animation" data-animation="fadeInLeft"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/logo.png" alt="logo"></a>

                <!-- nav -->
                <nav class="animation" data-animation="fadeInRight">
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'menu-1',
                            'container' => '',
                            'menu_class' => 'menu',
                            'menu_id' => 'menu'
                        ));
                    ?>
                </nav><!-- # nav -->

                <div class="clearfix"></div>

            </div><!--# row  -->

        </div> <!-- # container -->

    </header> <!-- # header -->

	<div id="content" class="site-content">
