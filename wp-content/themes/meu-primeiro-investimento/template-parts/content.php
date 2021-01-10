<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Meu_Primeiro_Investimento
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<section class="bg-color-blue blog-1">
        <div class="container entry-header">
            <div class="row py-5 align-middle">
                <div class="col-10 py-5 mb-3 text-white">                    
                    <h2 class="font-weight-bold">
						<?the_title()?>
                    </h2>
                    <p>
                       <?the_date()?>
                    </p>
					<div class="box-category">
						Categorias: <?php the_category(', '); ?>
					</div>
                </div>
				<div class="col-2">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="" class="w-100">
				</div>                
            </div>
        </div>        		
    </section>
	<?get_template_part('template-parts/news-home')?>
	<section class="blog-2">
        <div class="container box-home-news">
			<div class="entry-content py-5">
				<?the_content()?>
			</div><!-- .entry-content -->		
		</div>
	</section>
	<section class="blog-2 entry-footer">
        <div class="container">
			<footer>
				<div class="p-3 my-4 box-news-home">
					<?php
					
						the_post_navigation(
							array(
								'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Anterior:', 'meu-primeiro-investimento' ) . '</span> <span class="nav-title">%title</span>',
								'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Próximo:', 'meu-primeiro-investimento' ) . '</span> <span class="nav-title">%title</span>',
							)
						);
					?>
				</div>
				<div class="p-3 bg-color-light box-news-home mt-4">
					<?php
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

					?>
				
				</div>
			</footer>
		
		</div>
	</section>	
</article><!-- #post-<?php the_ID(); ?> -->
