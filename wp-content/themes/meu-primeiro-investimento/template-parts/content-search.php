<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Meu_Primeiro_Investimento
 */

?>

<article class="container box-news-home my-4 p-4" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-8">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		
				<?php if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php
					meu_primeiro_investimento_posted_on();
					meu_primeiro_investimento_posted_by();
					?>
				</div><!-- .entry-meta -->
				<?php endif; ?>
			</header><!-- .entry-header -->
		
			
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div><!-- .entry-summary -->
			
			<footer class="entry-footer">
				<?php meu_primeiro_investimento_entry_footer(); ?>
			</footer><!-- .entry-footer -->		
		</div>
		<div class="col-4">
			<img
				src="<?php the_post_thumbnail_url(); ?>"
				class="img-fluid"
			/>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
