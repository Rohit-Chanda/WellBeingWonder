<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @package blogwaves
 */

get_header();

if ( have_posts() ) : ?>

<section class="wp-blog-section ptb-100 bg-color">
		<div class="container">
			<div class="row no-sidebar">
				<div class="col-lg-12">
					<div class="column-3 grid">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content', get_post_type() ); ?>
						<?php endwhile; ?>
					</div>
					
					<div class="pagination">
                        <nav class="Page navigation">
                            <ul class="page-numbers">
                                <?php echo paginate_links(); ?>
                            </ul>
                        </nav>
                    </div>
					
				</div>
			</div> 
		</div> 
</section>
<?php endif; 
get_footer(); 
?>
