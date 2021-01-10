<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Meu_Primeiro_Investimento
 */

get_header();
?>

	<main id="primary" class="site-main">
		<div class="container-full">
			<?php
				while ( have_posts() ) :
					the_post();

					get_template_part( 'template-parts/content', get_post_type() );			

				endwhile; // End of the loop.
			?>	
		</div>
	</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
