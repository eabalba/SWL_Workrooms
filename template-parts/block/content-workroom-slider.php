<?php
/**
 * Block Name: Content Workroom Slider
 *
 * This is the template that displays the Workroom Slider block.
 */

// create id attribute for specific styling
$id = 'workroom-slider-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
$direction = get_field('content_direction');
?>

                
<div id="<?php echo $id; ?>" class="<?php echo $align_class; ?> custom-block workroom-slider-block <?php echo $direction; ?>">

    <div class="workroom-slider-container slider-text-on-<?php echo $direction; ?>">
        <div class="workroom-slider-content-container">
            <div class="workroom-slider-content">
                <div class="slider-heading">
                    <?php the_field('slider_heading') ?></div>
                <div class="slider-content">
                    <?php the_field('slider_content') ?></div>
            </div>
            <div class="workroom-slider-button-container">
                <?php 
                    $link = get_field('workroom_slider_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button workroom-slider-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
        </div>  
        <div class="workroom-slider-gallery" >     
            <?php 
            $images = get_field('slider_gallery');
            $size = 'full'; // (thumbnail, medium, large, full or custom size)
            if( $images ): ?>
                <ul class="slick-workroom-gallery">
                <?php foreach( $images as $image_id ): ?>
                        <li>
                            <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                        </li>
                <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>
    </div>
</div>