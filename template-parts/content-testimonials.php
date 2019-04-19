<?php

$testimonial_heading = get_field('testimonial_heading');
$testimonial_description = get_field('testimonial_description');

?>

<!-- Testimonials Section -->
<section class="testimonials section-padding center animation" data-stellar-background-ratio="0.5" data-animation="fadeInUp" id="testimonials">
    <div class="testimonials-header">
        <h1 class="white"><?php echo $testimonial_heading; ?></h1>
        <p><?php echo $testimonial_description; ?></p>
    </div>
    <ul class="testimonials-carousel">
        <?php
        $work_items = array(
            'post_type' => 'client_testimonials',
            'orderby' => 'post_id',
            'order' => 'DESC'
        );

        $works = new WP_Query($work_items);
        ?>
        <?php while($works->have_posts()) : $works->the_post(); ?>
            <?php
            $testimonial_sub_title = get_field('testimonial_sub_title');
            ?>
            <li>
                <?php
                if (has_post_thumbnail()) {
                    the_post_thumbnail();
                }
                ?>
                <p class="name"><?php the_title(); ?></p>
                <p class="position"><?php echo $testimonial_sub_title; ?></p>
                <?php the_content(); ?>
            </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>

    <ul class="testipager">
        <li><a href="#"><i class="fa fa-circle"></i></a>
        </li><li><a href="#"><i class="fa fa-circle"></i></a>
        </li><li><a href="#"><i class="fa fa-circle"></i></a>
        </li>
    </ul>
</section><!-- # Testimonials Section -->
