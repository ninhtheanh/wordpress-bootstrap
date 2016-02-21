<?php
/**
 * Template for displaying pages
 * 
 */

get_header();

$main_column_size = bootstrapBasicGetMainColumnSize(); //Ex 9 if right or left sidebar. 12 if no right & left sidebar(fullwidth)
?> 
<?php get_sidebar('left'); ?>
				<div id="primary" class="col-md-<?php echo $main_column_size; ?> content-area">
					<main id="main" class="site-main" role="main">
						<?php 
						while (have_posts()) {
							the_post();

							get_template_part('template-parts/content', 'page');

							echo "\n\n";
							
							// If comments are open or we have at least one comment, load up the comment template
							if (comments_open() || '0' != get_comments_number()) {
								comments_template();
							}

							echo "\n\n";

						} //endwhile;
						?> 
					</main>
				</div>
				<!--#primary-->
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 