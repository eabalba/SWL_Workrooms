<?php get_header(); 
if ( have_posts() ): while ( have_posts() ) : the_post();
$our_title = get_the_title( get_option('page_for_posts', true) );
 ?>
 <div class="container--without-sidebar">
    
    <div class="single-post-header-image">
        <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php the_post_thumbnail(); ?>" alt="Post header image"/>
        <?php } else { ?> 
            <img src="http://sash-windows-uk-workroom.local/wp-content/uploads/2021/11/slider_wr2.2.jpg" alt="<?php the_title(); ?>" />
        <?php }?>
    </div>
    <div class="post_content_header">
        <h1><?php the_title(); ?></h1>
    </div>
    <div class="single-post-overlay">
    </div>
    <main id="main" class="container--main post-content-container">
       
        <?php the_content(); ?>
    </main>
   

</div>
<?php endwhile; endif?>
<?php get_footer(); ?>