<?php

$our_work_heading = get_field('our_work_heading');
$our_work_description = get_field('our_work_description');

?>


<!-- Portfolio Section -->
<section class="portfolio section-padding" data-stellar-background-ratio="0.5" id="portfolio">

    <div class="animation" data-animation="fadeIn">
        <div class="portfolio-header">
            <h1 class="white"><?php echo $our_work_heading; ?></h1>
            <p><?php echo $our_work_description; ?></p>
        </div><!-- End portfolio header -->
    </div>

    <div class="container">
        <div class="row">
            <div class="animation" data-animation="fadeInUp">
                <ul class="portfolio-carousel">
                    <?php
                    $work_items = array(
                        'post_type' => 'our_work',
                        'orderby' => 'post_id',
                        'order' => 'DESC'
                    );

                    $works = new WP_Query($work_items);
                    ?>
                    <?php while($works->have_posts()) : $works->the_post(); ?>
                        <?php
                        $thumbnail_img_url = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
                        $click_here_text = get_field('click_here_text');
                        ?>
                        <li>
                            <div class="inner-content">
                                <img src="<?php echo $thumbnail_img_url; ?>"/>
                                <div class="overlay-content">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php echo $click_here_text; ?></p>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; wp_reset_query(); ?>
                </ul>

                <ul class="portfolio-nav">
                    <li id="prev" style="display:inline-block;">&lt;</li>
                    <li id="next" style="display:inline-block;">&gt;</li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- # portfolio -->
