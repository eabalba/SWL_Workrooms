<?php get_header(); ?>

	<main id="main" class="main__container">
		<div class="blog-feed-title">
			<h1>workroom Blog</h1>
		</div>
			<div class="alignwide blog__feed">
				<?php if ( have_posts() ): while ( have_posts() ) : the_post(); ?>
					<a href="<?php the_permalink(); ?>" class="blog__link wp-block-latest-posts" title="<?php the_title(); ?>">
						<div class="blog__excerpt">
							<h2 class="blog__link-title"><?php the_title(); ?></h2>
							
								<p><?php echo get_excerpt(150); ?></p>
								<span class="blog__cta button">Read More</span>
						</div>
						<figure class="blog__thumb">
							<?php if ( has_post_thumbnail( )){ ?>	
									<?php the_post_thumbnail(); ?>
							<?php } else { ?>
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.jpg" alt="<?php the_title(); ?>" />
							<?php } ?>
						</figure>  
					</a>
					<?php endwhile; endif?>
			</div>

			<nav class="pagination"><?php bnine_pagination(); ?></nav>
	</main>
		

<?php get_footer(); ?>