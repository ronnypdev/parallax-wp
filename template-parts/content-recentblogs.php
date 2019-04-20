<?php

$blog_heading = get_field('blog_heading');
$blog_description = get_field('blog_description');

?>


<!-- Blog Section -->
<section class="section-padding blog">
    <div class="animation" data-animation="fadeIn">
        <div class="blog-header center">
            <h1><?php echo $blog_heading; ?></h1>
            <p><?php echo $blog_description; ?></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $testimonials_post = array(
                'post_type' => 'blog_posts',
                'orderby' => 'post_id',
                'order' => 'DESC'
            );

            $testimonials = new WP_Query($testimonials_post);
            ?>
            <?php while($testimonials->have_posts()) : $testimonials->the_post(); ?>
                <?php
                $article_thumbnail = get_field('article_thumbnail');
                $article_description = get_field('article_description');
                $article_content = get_field('article_content');
                ?>
                <div class="animation" data-animation="fadeInLeft">
                    <div class="col-md-4">
                        <?php if ($article_thumbnail) : ?>
                            <img src="<?php echo $article_thumbnail; ?>" alt="post1" class="img-responsive">
                        <?php endif; ?>
                        <h3><a href="#" class="secondary-sky-blue"><?php the_title(); ?></a></h3>
                        <p class="post-description"><?php echo $article_description; ?></p>
                        <p class="post-content"><?php echo $article_content; ?></p>
                    </div>
                </div>
            <?php endwhile;?>
        </div>
    </div>
</section><!-- End testimonial section -->
