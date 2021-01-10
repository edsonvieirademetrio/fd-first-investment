<?php 
    $materiaisSecao1 = get_field('secao_1', 1867);
    $materiaisSecao2 = get_field('secao_2', 1867);
    $materiaisSecao3 = get_field('secao_3', 1867);
    $materiaisSecao4 = get_field('secao_4', 1867);
?>
<main id="primary" class="site-main">
    <section class="bg-color-blue blog-1">
        <div class="container">
            <div class="row py-5 align-middle">
                <div class="col-12 py-5 mb-3 text-white">
                    <h5>
                       <?=$materiaisSecao1['titulo']?>
                    </h5>
                    <h2 class="font-weight-bold">
                        <?=$materiaisSecao1['subtitulo']?>
                    </h2>
                    <p>
                       <?=$materiaisSecao1['texto']?>
                    </p>
                </div>                
            </div>
        </div>        
    </section>
    <section class="blog-2 materiais">
        <div class="container">
            <div class="row py-5">                
                <div class="col-12 featured-post-blog mt-4">
                    <h3>
                       <?=$materiaisSecao2['titulo']?>
                    </h3>
                    <h5>
                        <?=$materiaisSecao2['subtitulo']?>
                    </h5>
                    <div class="row ">
                        
                        <?php $the_query = new WP_Query( array( 'posts_per_page' => '6', 'cat' => $materiaisSecao2['categoria'] ) );  ?>
                        <?php if ( $the_query->have_posts() ) : ?>
                            <div class="row m-flex-row m-flex-nowrap overflow-x-scroll">
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                                    <div class="col-8 col-lg-3 mb-3">
                                        <a href="<?php the_permalink(); ?>">
                                        <div class="col bg-image border-left border-success rounded-left">
                                            <img
                                                src="<?the_post_thumbnail_url()?>"
                                                class="img-fluid"
                                                alt="Sample"
                                            />
                                            <a href="<?php the_permalink(); ?>">
                                                <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                                                    <div class="d-flex justify-content-center align-items-center h-100">
                                                    <p class="text-white mb-0"><?the_title()?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        
                                        </div>
                                        </a>
                                    </div> 
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>

                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="blog-3 materiais">
        <div class="container">
            <div class="row py-5">                
                <div class="col-12 featured-post-blog mt-4">
                    <h3>
                       <?=$materiaisSecao3['titulo']?>                            
                    </h3>
                    <h5>
                       <?=$materiaisSecao3['subtitulo']?>                                                    
                    </h5>
                    <div class="row">                        
                        <div class="col-12 list-post-blog mt-4">
                            <?php $the_query = new WP_Query( array( 'posts_per_page' => '6', 'cat' => $materiaisSecao3['categoria'] ) );  ?>
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
                                                    <a href="<?php the_permalink(); ?>">
                                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                                    </a>
                                                </div>
                                                <div class="card-body">
                                                    <p class="card-text text-uppercase">
                                                        <?php the_category(','); ?>
                                                    </p>
                                                    <a href="<?php the_permalink(); ?>">
                                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>                                
                                    <?php endwhile; ?>
                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <section class="blog-3 materiais">
        <div class="container">
            <div class="row py-5">                
                <div class="col-12 featured-post-blog mt-4">
                    <h3>
                       <?=$materiaisSecao4['titulo']?>                                                            
                    </h3>
                    <h5>
                       <?=$materiaisSecao4['subtitulo']?>                                                    
                    </h5>
                    <div class="row">
                        
                    <div class="col-12 list-post-blog mt-4">
                        <?php $the_query = new WP_Query( array( 'posts_per_page' => '6', 'cat' => $materiaisSecao4['categoria'] ) );  ?>
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
                                                <a href="<?php the_permalink(); ?>">
                                                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
                                                </a>
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text text-uppercase">
                                                    <?php the_category(','); ?>
                                                </p>
                                                <a href="<?php the_permalink(); ?>">
                                                    <h5 class="card-title"><?php the_title(); ?></h5>
                                                </a>
                                            </div>
                                        </div>
                                    </div>                                
                                <?php endwhile; ?>
                            </div>
                        <?php endif; ?>
                    </div>

                    </div>
                </div>
               
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/news-before-footer'); ?>
    
</main>