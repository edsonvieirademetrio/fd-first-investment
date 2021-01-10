<?php 
    $cursosSecao1 = get_field('secao_1', 1871);
?>
<main id="primary" class="site-main">
    <section class="bg-color-blue blog-1">
        <div class="container">
            <div class="row py-5 align-middle">
                <div class="col-12 py-5 mb-3 text-white">
                    <h5>
                       <?=$cursosSecao1['titulo']?>
                    </h5>
                    <h2 class="font-weight-bold">
                        <?=$cursosSecao1['subtitulo']?>
                    </h2>
                    <p>
                       <?=$cursosSecao1['texto']?>
                    </p>
                </div>                
            </div>
        </div>        
    </section>

    <section class="blog-3 materiais">
        <div class="container">
            <div class="row py-5">                
                <div class="col-12 featured-post-blog mt-4">                    
                    
                    <?php $the_query = new WP_Query( array( 'posts_per_page' => '6', 'cat' => $cursosSecao1['categoria']) );  ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                            <div class="row m-flex-row m-flex-nowrap overflow-x-scroll">
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <div class="col-8 col-lg-4  mb-4">
                                        <div class="col card">
                                            <div class="bg-image hover-overlay ripple" data-ripple-color="light">                                        
                                                <img
                                                src="<?php the_post_thumbnail_url(); ?>"
                                                class="img-fluid"
                                                />
                                                <a href="#!">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text text-uppercase">
                                                    <?php the_category(); ?>
                                                </p>
                                                <h5 class="card-title"><?php the_title(); ?></h5>
                                            </div>
                                        </div>
                                    </div>                                
                                <?php endwhile; ?>
                            </div>
                    <?php endif; ?>
                    
                </div>
               
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/news-before-footer'); ?>
    
</main>