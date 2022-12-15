<?php
/**
 * Block Name: Logos
 *
 * This is the template that displays the logos.
 */

// create id attribute for specific styling
$id = 'logos-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>

<div id="<?php echo $id; ?>" class="custom-block logos-block <?php echo $align_class; ?>">
    <div class="logos__viewport ">
        <div class="logos__inner">
            <div class="logos__container ">
                <?php while(have_rows('logos')): the_row(); ?>
                    <?php if(get_sub_field('link')): ?>
                        <a class="logo" href="<?php $link = get_sub_field('link'); echo $link['url']; ?>" target="<?php echo $link['target']; ?>" title="<?php echo $link['title']; ?>" class="logos ">
                    <?php else: ?>
                        <div class="logo">
                    <?php endif; ?>
                            <?php 
                                $image = get_sub_field('logo');
                                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size );
                                };
                            ?>
                    <?php if(get_sub_field('link')): ?>
                        </a>
                    <?php else: ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>

            </div>
            <div class="logos__container ">
                <?php while(have_rows('logos')): the_row(); ?>
                    <?php if(get_sub_field('link')): ?>
                        <a class="logo" href="<?php $link = get_sub_field('link'); echo $link['url']; ?>" target="<?php echo $link['target']; ?>" title="<?php echo $link['title']; ?>" class="logos ">
                    <?php else: ?>
                        <div class="logo">
                    <?php endif; ?>
                            <?php 
                                $image = get_sub_field('logo');
                                $size = 'medium'; // (thumbnail, medium, large, full or custom size)
                                if( $image ) {
                                    echo wp_get_attachment_image( $image, $size );
                                };
                            ?>
                    <?php if(get_sub_field('link')): ?>
                        </a>
                    <?php else: ?>
                        </div>
                    <?php endif; ?>
                <?php endwhile; ?>
                
            </div>
        </div>
    </div>
</div>

