<?php
/**
 * Block Name: Google Map
 *
 * This is the template that displays an embedded google map.
 */

// create id attribute for specific styling
$id = 'map-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';


?>

<div id="<?php echo $id; ?>" class=" <?php echo $align_class; ?> custom-block map-block">
   <?php the_field('map_embed'); ?>
</div>

