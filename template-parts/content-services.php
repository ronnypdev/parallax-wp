<?php
$services_heading = get_field('services_heading');
$services_description = get_field('services_description');
?>

<!-- Services Section -->
<section class="services section-padding" id="services">

    <div class="animation" data-animation="fadeIn">
        <div class="services-header">
            <h1><?php echo $services_heading; ?></h1>
            <p><?php echo $services_description; ?></p>
        </div><!-- End services header -->
    </div>

    <section class="services-content">

        <div class="container">

            <div class="row">

                <?php
                $our_services = array(
                    'post_type' => 'our_services',
                    'orderby' => 'post_id',
                    'order' => 'DESC'
                );

                $services = new WP_Query($our_services);
                ?>
                <?php while($services->have_posts()) : $services->the_post(); ?>
                <div class="col-md-4">
                    <div class="animation" data-animation="fadeInLeft">
                        <p><i class="<?php the_field('services_icon'); ?>"></i></p>
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?><!-- end row -->

            </div><!-- # container -->
    </section><!-- # services content-->
</section><!-- # services -->