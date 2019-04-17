<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package parallax
 */

?>

<!-- Slider Section -->
<section class="slider" id="slider">
    <ul class="slider-carousel" id="slider-carousel">
        <?php
        $slides = array(
            'post_type' => 'slide_content',
            'orderby' => 'post_id',
            'order' => 'DESC'
        );

        $carousel = new WP_Query($slides);
        ?>
        <?php while($carousel->have_posts()) : $carousel->the_post(); ?>
            <?php
            $btn_cta1 = get_field('btn_cta1');
            $btn_cta2 = get_field('btn_cta2');
            $thumbnail_url = wp_get_attachment_url(get_post_thumbnail_id( $post->ID ));
            ?>
            <li style="background: url('<?php echo $thumbnail_url; ?>') no-repeat; background-size: 100% 100%;">
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
                <a href="#" class="primary-bg cta1"><?php echo $btn_cta1; ?></a>
                <a href="#" class="secondary-sky-blue-bg cta2"><?php echo $btn_cta2; ?></a>
            </li>
        <?php endwhile; wp_reset_query(); ?>
    </ul>
    <ul class="sliderpager">
        <li><a href="#"><i class="fa fa-circle"></i></a></li>
        <li><a href="#"><i class="fa fa-circle"></i></a></li>
        <li><a href="#"><i class="fa fa-circle"></i></a></li>
    </ul>
</section><!-- # Slider -->
