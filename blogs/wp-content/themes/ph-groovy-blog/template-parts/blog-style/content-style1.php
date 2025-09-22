<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package phcreativeblog
 */
?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('row blog-style1 col-md-6'); ?>>
	<div class="posts-container">
		<div class="thumbnail-wrapper">
		<a href="<?php the_permalink(); ?>" class="thumbnail-link" 
				<?php if (has_post_thumbnail()): ?> 
				style="background-image: url(<?php echo get_the_post_thumbnail_url( get_the_ID(), 'phgrooyblog-thumbnail-4x3' ); ?>);" 
				<?php else: ?> 
				style="background-image: url(<?php echo esc_url( get_template_directory_uri() . "/design-files/images/thumbnail.jpg" ); ?>);" 
				<?php endif; ?>>
			</a>
		</div>
		<!-- Add more posts here in similar divs -->
	</div>


		<div class="post-details">
		<?php $phgroovyblog_primary_category = phcreativeblog_primary_category(); 
				if (true) :
					echo "<a href='".esc_url($phgroovyblog_primary_category['url'])."' class='category-ribbon'>".esc_html($phgroovyblog_primary_category['category_name'])."</a>";	
				endif;
		?>
			<a href="<?php the_permalink(); ?>"></a>
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
			<div class="entry-meta">
				<?php
				phcreativeblog_posted_on();
				phcreativeblog_posted_by();
				?>
			</div><!-- .entry-meta -->
			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->

