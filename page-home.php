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

        <header>

            <div class="container">

                <div class="row">
                    <a href="#" class="logo animation" data-animation="fadeInLeft"><img src="<?php echo get_template_directory_uri(); ?>/resources/img/logo.png" alt="logo"></a>

                    <nav class="animation" data-animation="fadeInRight">
                        <ul class="menu" id="menu">
                            <li><a href="#slider">Home</a></li>
                            <li><a href="#services">Services</a></li>
                            <li><a href="#portfolio">Our Work</a></li>
                            <li><a href="#team">Team</a></li>
                            <li><a href="#testimonials">Testimonials</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </nav><!-- end nav -->

                    <div class="clearfix"></div>

                </div><!--end row  -->

            </div> <!-- end container -->

        </header> <!-- End header -->

        <!-- Slider Section -->
        <section class="slider" id="slider">
            <ul class="slider-carousel" id="slider-carousel">
                <li class="img1">
                    <h1>Welcome to<span class="primary"> Corporate<span></h1>
                    <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page when looking at its layout</p>
                    <a href="#" class="primary-bg cta1">Get Started</a>
                    <a href="#" class="secondary-sky-blue-bg cta2">Contact Us</a>
                </li>
                <li class="img2">
                    <h1>We are <span class="primary"> Developers<span></h1>
                    <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page when looking at its layout</p>
                    <a href="#" class="primary-bg cta1">See Our Works</a>
                    <a href="#" class="secondary-sky-blue-bg cta2">Our Members</a>
                </li>
                <li class="img3">
                    <h1>We make <span class="primary"> Awesome Themes<span></h1>
                    <p>It is a long established fact that a reader will be distracted by the readable <br> content of a page when looking at its layout</p>
                    <a href="#" class="primary-bg cta1">Check Our Themes</a>
                    <a href="#" class="secondary-sky-blue-bg cta2">Contact Us</a>
                </li>
            </ul>
            <ul class="sliderpager">
                <li><a href="#"><i class="fa fa-circle"></i></a></li>
                <li><a href="#"><i class="fa fa-circle"></i></a></li>
                <li><a href="#"><i class="fa fa-circle"></i></a></li>
            </ul>
        </section><!-- End Slider -->

        <!-- Services Section -->
        <section class="services section-padding" id="services">

            <div class="animation" data-animation="fadeIn">
                <div class="services-header">
                    <h1>Our Services</h1>
                    <p>It is a long established fact that a reader will be distracted by <br> the readable content of a page when looking at its layout</p>
                </div><!-- End services header -->
            </div>

            <section class="services-content">

                <div class="container">

                    <div class="row">

                        <div class="col-md-4">
                            <div class="animation" data-animation="fadeInLeft">
                                <p><i class="fa fa-laptop"></i></p>
                                <h3>Web Design</h3>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here,
                                    content here', making it look like readable English</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="animation" data-animation="fadeInLeft">
                                <p><i class="fa fa-edit"></i></p>
                                <h3>Graphic Design</h3>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here,
                                    content here', making it look like readable English</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="animation" data-animation="fadeInLeft">
                                <p><i class="fa fa-cog"></i></p>
                                <h3>PSD to Html/CSS</h3>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here,
                                    content here', making it look like readable English</p>
                            </div>
                        </div>

                    </div><!-- end row -->

                    <br>

                    <div class="row">

                        <div class="col-md-4">
                            <div class="animation" data-animation="fadeInLeft">
                                <p><i class="fa fa-bars"></i></p>
                                <h3>Wordpress</h3>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here,
                                    content here', making it look like readable English</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="animation" data-animation="fadeInLeft">
                                <p><i class="fa fa-leaf"></i></p>
                                <h3>Theme Development</h3>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here,
                                    content here', making it look like readable English</p>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="animation" data-animation="fadeInLeft">
                                <p><i class="fa fa-globe"></i></p>
                                <h3>Unlimited Support</h3>
                                <p>The point of using Lorem Ipsum is that it has a more-or-less
                                    normal distribution of letters, as opposed to using 'Content here,
                                    content here', making it look like readable English</p>
                            </div>
                        </div>

                    </div><!-- end row -->

                </div><!-- end container -->

            </section><!-- end services content-->

        </section><!-- end services -->

        <!-- Portfolio Section -->
        <section class="portfolio section-padding" data-stellar-background-ratio="0.5" id="portfolio">

            <div class="animation" data-animation="fadeIn">
                <div class="portfolio-header">
                    <h1 class="white">Our Work</h1>
                    <p>It is a long established fact that a reader will be distracted by <br> the readable content of a page when looking at its layout</p>
                </div><!-- End portfolio header -->
            </div>

            <div class="container">
                <div class="row">
                    <div class="animation" data-animation="fadeInUp">
                        <ul class="portfolio-carousel">
                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project1.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project2.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project3.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project4.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project2.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project3.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project4.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="inner-content">
                                    <img src="<?php echo get_template_directory_uri(); ?>/resources/img/project2.png" alt="project1" />
                                    <div class="overlay-content">
                                        <h3>Enviroment Website</h3>
                                        <p><a href="#">Click here</a> for details </p>
                                    </div>
                                </div>
                            </li>
                        </ul>

                        <ul class="portfolio-nav">
                            <li id="prev" style="display:inline-block;">&lt;</li>
                            <li id="next" style="display:inline-block;">&gt;</li>
                        </ul>
                    </div>
                </div>
            </div>

        </section><!-- End portfolio -->

        <!-- Team Section -->
        <section class="team section-padding" id="team">
            <div class="animation" data-animation="fadeIn">
                <div class="team-header">
                    <h1>Our Team</h1>
                    <p>It is a long established fact that a reader will be distracted by <br> the readable content of a page when looking at its layout</p>
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
                <p>Copyright &copy;<span class="primary">Corporate</span> 2015 . All Rights Reserved.</p>
            </div>

        </footer>

    </div><!-- entire content -->



<?php
get_footer();
