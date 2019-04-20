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
        <section class="section-padding contact" data-stellar-background-ratio="0.5" id="contact">
            <div class="contact-header center">
                <h1 class="white">Contact Us</h1>
                <p>It is a long established fact that a reader will be distracted by <br> the readable content of a page when looking at its layout</p>
            </div>

            <form class="contact-form animation" data-animation="zoomIn">
                <fieldset>
                    <input type="text" id="name" placeholder="Name">
                </fieldset>
                <fieldset>
                    <input type="email" id="email" placeholder="Email">
                </fieldset>
                <fieldset>
                    <input type="text" id="subject" placeholder="Subject">
                </fieldset>
                <fieldset>
                    <textarea rows="7" cols="30" placeholder="message"></textarea>
                </fieldset>
                <fieldset>
                    <input type="submit" id="submit" value="Submit">
                </fieldset>
            </form>

        </section><!-- End contact section -->

    </div><!-- entire content -->



<?php
get_footer();
