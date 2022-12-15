<?php
/**
 * Block Name: List
 *
 * This is the template that displays the list block.
 */

// create id attribute for specific styling
$id = 'feature-list-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';


?>

<ul id="<?php echo $id; ?>" class=" <?php echo $align_class; ?> custom-block feature-list-block col col-<?php the_field('no_of_columns'); ?>">
    <?php while(have_rows('list_items')): the_row(); 
        $attachment_id = get_sub_field('icon');?>
        <li>
            <?php
            if ($attachment_id ) {

                $size = "medium"; // (thumbnail, medium, large, full or custom size)
                echo wp_get_attachment_image( $attachment_id, $size);
            }
            ?>
            
            <?php the_sub_field('list_item_content'); ?>
        </li>
    <?php endwhile; ?>
</ul>

