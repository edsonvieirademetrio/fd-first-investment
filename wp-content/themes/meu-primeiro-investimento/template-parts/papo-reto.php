<?php 
    $papoRetoSecao1 = get_field('secao_1', 1840);
?>
<main id="primary" class="site-main">
    <section class="bg-color-blue blog-1">
        <div class="container">
            <div class="row py-5 align-middle">
                <div class="col-12 py-5 mb-3 text-white">
                    <h5 class="text-uppercase">
                        <?=$papoRetoSecao1['titulo']?>
                    </h5>
                    <h2 class="font-weight-bold">
                        <?=$papoRetoSecao1['subtitulo']?>
                    </h2>
                </div>                
            </div>
        </div>        
    </section>
    <?get_template_part('template-parts/news-home')?>
    <section class="blog-2">
        <div class="container">
            <div class="row py-5">                
                <div class="col-12 list-post-blog mt-4">
                    <?php $the_query = new WP_Query( array( 'posts_per_page' => '-1', 'cat' => $papoRetoSecao1['categoria'] ) );  ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <div class="row">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="col alert p-5 bg-light border border-warning mx-4" role="alert" data-color="primary">
                                    <h4 class="alert-heading"><?php the_title(); ?></h4>
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    <hr />
                                    <p class="mb-0 small">
                                        <?php the_date(); ?> <?php //the_category(', '); ?>
                                    </p>
                                </div>                                                       
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
</main>