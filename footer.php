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

?>

	</div><!-- #content -->

<!-- Footer section -->
<footer>
    <div class="container">
        <div class="row">
            <div class="animation" data-animation="fadeInLeft">
                <div class="col-md-4">
                    <h1>About Corporate</h1>
                    <p class="about">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English</p>
                    <p><i class="fa fa-envelope"></i><span class="contact-email">corporate@email.com</span></p>
                    <p><i class="fa fa-mobile"></i><span class="contact-mobile">+414 777 444</span></p>
                    <p><i class="fa fa-location-arrow"></i><span class="contact-location">69 , New York City , New York</span></p>
                </div>
            </div>

            <div class="animation" data-animation="fadeInLeft">
                <div class="col-md-4">
                    <h1>Get Blog Updates</h1>
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
                    <h1>Stay In Touch</h1>
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
        <p>Copyright &copy;<span class="primary">Corporate</span> <?php the_time('Y'); ?> . All Rights Reserved.</p>
    </div>

</footer><!-- # Footer section -->

<?php wp_footer(); ?>

</body>
</html>
