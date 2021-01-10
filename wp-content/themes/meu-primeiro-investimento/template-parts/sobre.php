<?php 
    $sobreSecao1 = get_field('secao_1', 1837);
    $sobreSecao2 = get_field('secao_2', 1837);
?>
<main id="primary" class="site-main">
    <section class="sobre-1" style="background: url('https://viverdeblog.com/wp-content/uploads/2013/02/vdb-bg-sobre.jpg')">
        <div class="container">
            <div class="row py-5 align-middle" >
                <div class="col-12 py-5 mb-3 text-center">
                    <h5>
                        <?=$sobreSecao1['titulo']?>
                    </h5>
                    <h2 class="font-weight-bold">
                        <?=$sobreSecao1['subtitulo']?>
                    </h2>
                </div>                
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-8 box-video-about">
                    <?=$sobreSecao1['video']?>                    
                </div>
            </div>
        </div>        
    </section>
    <section class="sobre-2 py-5">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-lg-6">
                    <h2 class="mb-2">
                        <?=$sobreSecao2['titulo']?>
                    </h2>
                    <h5 class="mb-3">
                        <?=$sobreSecao2['subtitulo']?>                        
                    </h5>
                    <p class="py-4">                        
                        <?=$sobreSecao2['texto']?>                        
                    </p>
                </div>
                <div class="col-6 text-center d-none d-lg-block">
                    <img src="<?=$sobreSecao2['imagem']?>" alt="" style="height: 600px;">
                </div>             
            </div>
        </div>
    </section>
    <?php get_template_part('template-parts/news-before-footer'); ?>

</main>