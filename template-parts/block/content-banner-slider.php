<?php
/**
 * Block Name: Hero Banner Image Slider
 *
 * This is the template that displays the Banner Slider block.
 */

// create id attribute for specific styling
$id = 'banner-slider-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<div id="<?php echo $id; ?>" class=" <?php echo $align_class; ?> custom-block banner-slider-block full-height">
    
    <div class="banner-slider-gallery">
        <?php 
        $images = get_field('banner_slider_gallery');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if( $images ): ?>
            <div class="slick-banner-gallery">
                <?php foreach( $images as $image_id ): ?>
                    <div class="slick-banner-gallery-slide">
                        <?php echo wp_get_attachment_image( $image_id, $size); ?>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
    <div class="banner-slider-gallery-overlay "></div>
    <div class="banner-slider-content-container">
        
            <?php the_field('banner_slider_heading') ?>
     
            <?php the_field('banner_slider_content') ?>
    </div>
</div>

