<?php 

function bnine_pattern_categories() {
    register_block_pattern_category(
        'bnine',
        array(  
            'label' => __( 'Bamboo Nine', 'bamboo-nine' )           
        )
    );
}
add_action( 'init', 'bnine_pattern_categories' );

function bnine_patterns() {
   register_block_pattern(
        'bamboo-nine/columns-border',
        array(
            'title'   => __( 'Columns with Border' ),
            'categories' => array( 'bnine'),
            'content' => "<!-- wp:group {\"align\":\"full\",\"backgroundColor\":\"color_primary\",\"textColor\":\"color_white\"} -->\n<div class=\"wp-block-group alignfull has-color-white-color has-color-primary-background-color has-text-color has-background\"><!-- wp:columns {\"className\":\"border-right\"} -->\n<div class=\"wp-block-columns border-right\"><!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->\n<h3><em>Premium Design</em></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Our electric gates are designed specifically for your needs.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->\n<h3><em>Quality Support</em></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>We offer 24/7 support for your newly fitted gate.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->\n<h3><em>Ten Year Guarantee</em></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>All work Guaranteed in line with regular servicing &amp; maintenance.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column -->\n\n<!-- wp:column -->\n<div class=\"wp-block-column\"><!-- wp:heading {\"level\":3} -->\n<h3><em>Build Quality</em></h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>Our electric gates are built to ISO 13857 standards.</p>\n<!-- /wp:paragraph --></div>\n<!-- /wp:column --></div>\n<!-- /wp:columns --></div>\n<!-- /wp:group -->",
        ),
    );
}
//add_action( 'init', 'bnine_patterns' );
