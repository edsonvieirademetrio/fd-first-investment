<?php 
    $carteiraSecao1 = get_field('secao_1', 1865);
?>
<main id="primary" class="site-main">
    <section class="bg-color-blue blog-1">
        <div class="container">
            <div class="row py-5 align-middle">
                <div class="col-12 py-5 mb-3 text-white">
                    <h5>
                       <?=$carteiraSecao1['titulo']?>
                    </h5>
                    <h2 class="font-weight-bold">
                        <?=$carteiraSecao1['subtitulo']?>
                    </h2>
                </div>                
            </div>
        </div>        
    </section>
    <?get_template_part('template-parts/news-home')?>
    <section class="blog-2">
        <div class="container">
            <div class="row py-5">                
                <div class="col-12 featured-post-blog mt-4">
                    <?php $the_query = new WP_Query( array( 'posts_per_page' => '2', 'cat' => $carteiraSecao1['categoria'] ) );  ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <div class="row">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="col-12 col-lg-6 px-3 p-lg-4 mb-3 mb-lg-0">
                                        <div class="col bg-color-blue p-3 py-5 card">
                                            <div class="row">
                                                <div class="col-6">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="text-white">
                                                            <?php the_category(', '); ?>
                                                        </div>
                                                        <a href="<?php the_permalink(); ?>">
                                                            <?php the_title( '<h3 class="text-white">', '</h3>' ); ?>
                                                        </a>
                                                    </a>
                                                </div>
                                                <div class="col-6 text-center">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <?php the_post_thumbnail(); ?>
                                                    </a>
                                                </div>    
                                            </div>                                            
                                        </div>
                                </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-12 list-post-blog mt-4 d-block d-lg-none">
                    <?php $the_query = new WP_Query( array( 'offset' => '-2', 'cat' => $carteiraSecao1['categoria'] ) );  ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <div class="row flex-row flex-nowrap overflow-x-scroll">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="col mb-4">
                                    <div class="col card">
                                        <div class="bg-image hover-overlay ripple m-auto py-5 bg-color-blue w-100 text-center" data-ripple-color="light">                                        
                                            <img
                                                src="<?php the_post_thumbnail_url(); ?>"
                                                class="img-fluid"
                                            />                                            
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-uppercase small">
                                                <?php the_category(' | '); ?>
                                            </p>
                                            <h6 class="card-title font-weight-bold">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title( ); ?>
                                                </a>
                                            </h6>
                                        </div> 
                                    </div>
                                </div>                                
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="col-12 list-post-blog mt-4 d-none d-lg-block">
                    <?php $the_query = new WP_Query( array( 'offset' => '-2', 'cat' => $carteiraSecao1['categoria'] ) );  ?>
                    <?php if ( $the_query->have_posts() ) : ?>
                        <div class="row">
                            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                <div class="col-3 mb-4">
                                    <div class="col card">
                                        <div class="bg-image hover-overlay ripple m-auto py-5 bg-color-blue w-100 text-center" data-ripple-color="light">                                        
                                            <img
                                            src="<?php the_post_thumbnail_url(); ?>"
                                            class="img-fluid"
                                            />                                            
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text text-uppercase small">
                                                <?php the_category(' | '); ?>
                                            </p>
                                            <h6 class="card-title font-weight-bold">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php the_title( ); ?>
                                                </a>
                                            </h6>
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
</main>