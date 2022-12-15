<?php
/**
 * Block Name: Tabbed Content
 *
 * This is the template that displays the tabbed content block.
 */

// create id attribute for specific styling
$id = 'tabs-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';


?>

<div id="<?php echo $id; ?>" class=" <?php echo $align_class; ?> custom-block tab-block">
    <ul>
        <?php 
        $counter= 0; 
        while(have_rows('tabs')): the_row();
        $counter++; ?>
            <li>
                <a href="#section<?php echo $counter; ?>"><?php the_sub_field('tab_label'); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
   
    <?php 
    $counter= 0; 
    while(have_rows('tabs')): the_row();
    $counter++; ?>
        <section id="section<?php echo $counter; ?>" class="tab-content-container">
            <div class="tab-content">
                <?php the_sub_field('tab_content'); ?>
            </div> 

            <div class="tab-gallery tab-gallery-<?php echo $counter; ?>">
                <?php 
                $images = get_sub_field('tab_gallery');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if( $images ): ?>
                    <div class="slick-banner-gallery">
                    <?php foreach( $images as $image_id ): ?>
                            <?php echo wp_get_attachment_image( $image_id, $size ); ?>
                    <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>
        </section>
    <?php endwhile; ?>
</div>

