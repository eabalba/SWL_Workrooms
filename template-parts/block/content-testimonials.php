<?php
/**
 * Block Name: Testimonials
 *
 * This is the template that displays the testimonial block.
 */

// create id attribute for specific styling
$id = 'testimonial-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div id="<?php echo $id; ?>" class=" <?php echo $align_class; ?> custom-block testimonial-slide-gallery testimonial-block">
      <?php while(have_rows('testimonials')): the_row(); ?>
      <div class="testimonial-container">
        <div  class="testimonial-header">
            
                <?php 
                $image = get_sub_field('testimonial_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $image ) {
                    echo wp_get_attachment_image( $image, $size );
                }?>
            
            <div class="testimonial-heading">
                <div class="testimonial-name">
                    <p><?php the_sub_field('testimonial_name'); ?></p>
                </div>
                <div class="testimonial-location">
                    <p><?php the_sub_field('testimonial_location'); ?></p>
                </div>
                <div class="separator" ></div>
                <div class="testimonial-content">
                        <?php the_sub_field('testimonial_content'); ?>
                </div>
            </div>
        </div>  
    </div>
    <?php endwhile; ?>
</div>