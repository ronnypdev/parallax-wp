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
        <section class="team section-padding" id="team">
            <div class="animation" data-animation="fadeIn">
                <div class="team-header">
                    <h1>Our Team</h1>
                    <p>It is a long established fact that a reader will be distracted by <br> the readable content of a
                        page when looking at its layout</p>
                </div><!-- End portfolio header -->
            </div>

            <div class="container">
                <div class="row">
                    <div class="animation" data-animation="zoomIn">
                        <ul class="team-carousel">
                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member1.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member2.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member3.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member4.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member2.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member3.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member4.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member2.png" alt="project1" />
                                    <div class="overlay-content white">
                                        <p class="name primary bold">John Doe</p>
                                        <p class="position secondary-sky-blue bold">Web Developer</p>
                                        <p class="description">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
                                        <ul class="member-social-links">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <ul class="team-nav">
                            <li id="team-prev" style="display:inline-block;">&lt;</li>
                            <li id="team-next" style="display:inline-block;">&gt;</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section><!-- end team section -->

        <!-- Testimonials Section -->
        <section class="testimonials section-padding center animation" data-stellar-background-ratio="0.5" data-animation="fadeInUp" id="testimonials">
            <div class="testimonials-header">
                <h1 class="white">Client Testimonials</h1>
                <p>It is a long established fact that a reader will be distracted by <br> the readable content of a page when looking at its layout</p>
            </div>
            <ul class="testimonials-carousel">
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member3.png" alt="member">
                    <p class="name">John Doe</p>
                    <p class="position">Web Designer</p>
                    <blockquote>
                        <i>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use
                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</i>
                    </blockquote>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member2.png"/>
                    <p class="name">Christina</p>
                    <p class="position">Web Developer</p>
                    <blockquote>
                        <i>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use
                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</i>
                    </blockquote>
                </li>
                <li>
                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/member4.png"/>
                    <p class="name">Alex</p>
                    <p class="position">Web Designer</p>
                    <blockquote>
                        <i>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content
                            here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use
                            Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy</i>
                    </blockquote>
                </li>
            </ul>

            <ul class="testipager">
                <li><a href="#"><i class="fa fa-circle"></i></a>
                </li><li><a href="#"><i class="fa fa-circle"></i></a>
                </li><li><a href="#"><i class="fa fa-circle"></i></a>
                </li>
            </ul>
        </section>

        <!-- Blog Section -->
        <section class="section-padding blog">
            <div class="animation" data-animation="fadeIn">
                <div class="blog-header center">
                    <h1>Recent Posts from Blog</h1>
                    <p>It is a long established fact that a reader will be distracted by <br> the readable content of a page when looking at its layout</p>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="animation" data-animation="fadeInLeft">
                        <div class="col-md-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/resources/img/post1.png" alt="post1" class="img-responsive">
                            <h3><a href="#" class="secondary-sky-blue">Water Flowing</a></h3>
                            <p class="post-description"><i>by</i> <b><span class="primary">John</span></b> <i>on</i> <b class="date">12 Dec 2015</b></p>
                            <p class="post-content">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages </p>
                        </div>
                    </div>

                    <div class="animation" data-animation="fadeInLeft">
                        <div class="col-md-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/resources/img/post2.png" alt="post1" class="img-responsive">
                            <h3><a href="#" class="secondary-sky-blue">Awesome City</a></h3>
                            <p class="post-description"><i>by</i> <b><span class="primary">Alex</span></b> <i>on</i> <b class="date">12 Dec 2015</b></p>
                            <p class="post-content">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages </p>
                        </div>
                    </div>
                    <div class="animation" data-animation="fadeInLeft">
                        <div class="col-md-4">
                            <img src="<?php echo get_template_directory_uri(); ?>/resources/img/post3.png" alt="post1" class="img-responsive">
                            <h3><a href="#" class="secondary-sky-blue">Beautiful Sky</a></h3>
                            <p class="post-description"><i>by</i> <b><span class="primary">John</span></b> <i>on</i> <b class="date">12 Dec 2015</b></p>
                            <p class="post-content">The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End testimonial section -->

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
