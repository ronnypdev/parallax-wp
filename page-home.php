<?php
/**
 * The template for displaying all pages
 *
 * Template Name: Home
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parallax
 */
get_header();
?>


    <div class="entire-content">

        <!-- Slider Section -->
            <?php get_template_part('template-parts/content', 'carousel'); ?>
        <!-- # Slider -->

        <!-- Services Section -->
            <?php get_template_part('template-parts/content', 'services'); ?>
        <!-- # Services -->

        <!-- Portfolio Section -->
            <?php get_template_part('template-parts/content', 'portfolio'); ?>
        <!-- # portfolio -->

        <!-- Team Section -->
            <?php get_template_part('template-parts/content', 'teams'); ?>
        <!-- # team section -->

        <!-- Testimonials Section -->
            <?php get_template_part('template-parts/content', 'testimonials'); ?>
        <!-- # Testimonials Section -->

        <!-- Blog Section -->
            <?php get_template_part('template-parts/content', 'recentblogs'); ?>
       <!-- # Blog section -->

        <!-- Contact Section -->
            <?php get_template_part('template-parts/content', 'contactform'); ?>
        <!-- # contact section -->

    </div><!-- # content -->



<?php
get_footer();
