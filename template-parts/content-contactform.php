<?php

$contact_heading = get_field('contact_heading');
$contact_description = get_field('contact_description');

?>

<!-- Contact Section -->
<section class="section-padding contact" data-stellar-background-ratio="0.5" id="contact">
    <div class="contact-header center">
        <h1 class="white"><?php echo $contact_heading; ?></h1>
        <p><?php echo $contact_description; ?></p>
    </div>

    <form class="contact-form animation" data-animation="zoomIn">
        <?php the_content(); ?>
    </form>

</section><!-- # contact section -->
