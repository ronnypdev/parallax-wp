<?php

$our_team_heading = get_field('our_team_heading');
$our_team_description = get_field('our_team_description');

?>


<!-- Team Section -->
<section class="team section-padding" id="team">
    <div class="animation" data-animation="fadeIn">
        <div class="team-header">
            <h1><?php echo $our_team_heading; ?></h1>
            <p><?php echo $our_team_description; ?></p>
        </div><!-- End portfolio header -->
    </div>

    <div class="container">
        <div class="row">
            <div class="animation" data-animation="zoomIn">
                <ul class="team-carousel">
                    <?php
                    $work_items = array(
                        'post_type' => 'team_member',
                        'orderby' => 'post_id',
                        'order' => 'DESC'
                    );

                    $works = new WP_Query($work_items);
                    ?>
                    <?php while($works->have_posts()) : $works->the_post(); ?>
                        <?php
                        $job_title = get_field('job_title');
                        $team_member_description = get_field('team_member_description');
                        ?>
                        <li>
                            <div class="inner-content">
                                <?php
                                if (has_post_thumbnail()) {
                                    the_post_thumbnail();
                                }
                                ?>
                                <div class="overlay-content white">
                                    <p class="name primary bold"><?php the_title(); ?></p>
                                    <p class="position secondary-sky-blue bold"><?php echo $job_title; ?></p>
                                    <p class="description"><?php echo $team_member_description; ?></p>
                                    <ul class="member-social-links">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    <?php endwhile; wp_reset_query(); ?>
                </ul>

                <ul class="team-nav">
                    <li id="team-prev" style="display:inline-block;">&lt;</li>
                    <li id="team-next" style="display:inline-block;">&gt;</li>
                </ul>
            </div>
        </div>
    </div>

</section><!-- end team section -->
