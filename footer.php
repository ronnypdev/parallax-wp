<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package parallax
 */


$footer_heading_1 = get_field('footer_heading_1');
$footer_heading_2 = get_field('footer_heading_2');
$footer_heading_3 = get_field('footer_heading_3');


$footer_about = get_field('footer_about');
$footer_email = get_field('footer_email');
$footer_number = get_field('footer_number');
$footer_address = get_field('footer_address');
$footer_copyright = get_field('footer_copyright');

?>

	</div><!-- #content -->

<!-- Footer section -->
<footer>
    <div class="container">
        <div class="row">
            <div class="animation" data-animation="fadeInLeft">
                <div class="col-md-4">
                    <h1><?php echo $footer_heading_1; ?></h1>
                    <p class="about"><?php echo $footer_about; ?></p>
                    <p><i class="fa fa-envelope"></i><span class="contact-email"><?php echo $footer_email; ?></span></p>
                    <p><i class="fa fa-mobile"></i><span class="contact-mobile"><?php echo $footer_number; ?></span></p>
                    <p><i class="fa fa-location-arrow"></i><span class="contact-location"><?php echo $footer_address; ?></span></p>
                </div>
            </div>

            <div class="animation" data-animation="fadeInLeft">
                <div class="col-md-4">
                    <h1><?php echo $footer_heading_2; ?></h1>
                    <form class="update-form">
                        <fieldset>
                            <input type="text" id="take-email" placeholder="Enter your email here">
                        </fieldset>

                        <fieldset>
                            <input type="submit" id="submit-button" value="Sign Up">
                        </fieldset>
                    </form>
                </div>
            </div>

            <div class="animation" data-animation="fadeInLeft">
                <div class="col-md-4">
                    <h1><?php echo $footer_heading_3; ?></h1>
                    <ul class="footer-social-links">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>

    <div class="copyright">
        <p><?php echo $footer_copyright; ?><?php the_time('Y'); ?></p>
    </div>

</footer><!-- # Footer section -->

<?php wp_footer(); ?>

</body>
</html>
