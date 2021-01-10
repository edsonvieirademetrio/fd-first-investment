<?php 
    $homeSecao1 = get_field('secao_1', 5);
    $homeSecao2 = get_field('secao_2', 5);
    $homeSecao3 = get_field('secao_3', 5);
    $homeSecao4 = get_field('secao_4', 5);
    $homeSecao5 = get_field('secao_5', 5);
    $homeSecao6 = get_field('secao_6', 5);
?>
<main id="primary" class="site-main">
    <section class="bg-color-blue home-1">
        <div class="container">
            <div class="row py-5 align-middle">
                <div class="col-sm-12 col-lg-5">
                    <h4 class="text-white">
                        <?=$homeSecao1['titulo']?>
                    </h4>
                    <h2 class="font-weight-bold text-white">
                        <?=$homeSecao1['subtitulo']?>
                    </h2>
                </div>
                <div class="col-sm-12 col-lg-7 p-3 p-lg-0">
                    <img src="<?=$homeSecao1['imagem']?>" class="animated fadeIn w-100" alt="Primeiro Investimento">
                </div>
            </div>
        </div>        
    </section>
    <?get_template_part('template-parts/news-home')?>
    <section class="home-2">
        <div class="container">
            <div class="row py-5 my-5">
                <div class="col-12 col-lg-6 p-3">
                    <h2 class="text-uppercase font-weight-bold">
                        <?=$homeSecao2['titulo_1']?>
                    </h2>
                    <h4>
                        <?=$homeSecao2['subtitulo_1']?>
                    </h4>
                    <p>
                        <?=$homeSecao2['texto_1']?>
                    </p>
                    <button class="btn btn-md btn-primary">Ver mais</button>
                </div>               
                <div class="col-12 col-lg-6 p-3 pl-lg-5 border-left">
                    <h2 class="text-uppercase font-weight-bold">
                        <?=$homeSecao2['titulo_2']?>
                    </h2>
                    <h4>
                        <?=$homeSecao2['subtitulo_2']?>
                    </h4>
                    <p>
                        <?=$homeSecao2['texto_2']?>
                    </p>
                    <button class="btn btn-md btn-warning">Ver mais</button>
                </div>
            </div>
        </div>
    </section>
    <section class="home-3 bg-light">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-lg-8">
                    <h2>
                        <?=$homeSecao3['titulo']?>
                    </h2>
                    <p class="small">
                        <?=$homeSecao3['subtitulo']?>
                    </p>
                </div>
                <div class="col-4 d-none d-lg-block">
                    <div class="row m-0">
                        <div class="col-4">
                            <h1 class="font-weight-bold">
                                <?=$homeSecao3['indicador_1']?>
                            </h1>
                            <p>
                                <?=$homeSecao3['indicador_nome_1']?>
                            </p>
                        </div>
                        <div class="col-4">
                            <h1 class="font-weight-bold">
                                <?=$homeSecao3['indicador_2']?>
                            </h1>                            
                            <small class="small">
                                <?=$homeSecao3['indicador_nome_2']?>
                            </small>
                        </div>
                        <div class="col-4">
                            <h1 class="font-weight-bold">
                                <?=$homeSecao3['indicador_3']?>                                
                            </h1>
                            <small>
                                <?=$homeSecao3['indicador_nome_3']?>
                            </small>
                        </div>
                    </div>
                </div>
            </div>    
            <?php $the_query = new WP_Query( array( 'posts_per_page' => '4', 'cat' => $homeSecao3['categoria']) );  ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <div class="row py-4 flex-row flex-nowrap overflow-x-scroll">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col col-lg-3 px-3">
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
    </section>
    <section class="home-4">
        <div class="container pb-5">
            <div class="row pt-5 pb-4">
                <div class="col-12">
                    <h2>
                        <?=$homeSecao4['titulo']?>
                    </h2>
                    <p class="small">
                        <?=$homeSecao4['subtitulo']?>
                    </p>
                </div>                
            </div>   
            <!-- Loop do Ebook  -->
            <?php $the_query = new WP_Query( array( 'posts_per_page' => '4', 'cat' => $homeSecao4['categoria']) );  ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <div class="row py-2 flex-row flex-nowrap overflow-x-scroll">
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col col-lg-3 px-3">
                            <div class="col card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="col bg-image border-left border-success rounded-left">
                                        <img
                                        src="<?the_post_thumbnail_url();?>"
                                        class="img-fluid"
                                        />
                                        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
                                            <div class="d-flex justify-content-center align-items-center h-100">
                                            <p class="text-white mb-0"><?the_title();?></p>
                                            </div>
                                        </div>
                                    </div>                                                                                                   
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?wp_reset_query();?>              
        </div>
    </section>
    <section class="home-5 bg-peach-gradient">
        <div class="container">
            <!-- Loop do Produtos  -->
            <?php $the_query = new WP_Query( array( 'posts_per_page' => '1', 'cat' => $homeSecao5['categoria']) );  ?>
            <?php if ( $the_query->have_posts() ) : ?>
                <div class="row py-5">
                    <h5 class="text-white font-weight-bold">
                        <?=$homeSecao5['titulo']?>
                    </h5>
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <div class="col-12 col-lg-8">
                            <h2 class="font-weight-bold text-white">
                                <?the_title();?>
                            </h2>

                            <?the_excerpt();?>

                            <a href="<?php the_permalink(); ?>">
                            <button class="btn border border-white text-white font-weight-bold">
                                Ver mais...
                            </button>
                            </a>                                    
                        </div>
                        <div class="col-12 col-lg-4 py-3 py-lg-0">
                            <img
                                src="<?the_post_thumbnail_url();?>"
                                class="img-fluid rounded"
                                alt="Sample"
                            />
                        </div>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <?wp_reset_query();?>                     
        </div>
    </section>
    <section class="home-6">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-lg-6">
                    <img src="<?=$homeSecao6['imagem']?>" alt="" class="author-img-home">
                </div>
                <div class="col-12 col-lg-5 mr-1 my-auto">
                    <h2>
                        <?=$homeSecao6['titulo']?>
                    </h2>
                    <p>
                        <?=$homeSecao6['texto']?>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/news-before-footer'); ?>
</main>