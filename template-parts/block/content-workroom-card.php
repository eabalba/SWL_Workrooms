<?php
/**
 * Block Name: Workroom Card
 *
 * This is the template that displays the Workroom Card block.
 */

// create id attribute for specific styling
$id = 'workroom-card-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';
?>

<div id="<?php echo $id; ?>" class=" <?php echo $align_class; ?> custom-block workroom-card-block">
    <?php while(have_rows('workroom_card')): the_row(); ?>
        <div class="workroom-card-container">
            <div class="workroom-card-title">
                <?php the_sub_field('workroom_card_title') ?></div>
            <div class="workroom-card-content">
                <?php the_sub_field('workroom_card_content') ?></div>
        </div>
        <div class="workroom-card-button-container">
                <?php 
                    $link = get_sub_field('workroom_card_button');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <a class="button workroom-card-button" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                <?php endif; ?>
            </div>
    <?php endwhile; ?>
</div>