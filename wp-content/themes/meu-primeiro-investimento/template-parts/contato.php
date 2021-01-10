<?php 
    $formContato = get_field('form_contato', 1873);   
?>
<main id="primary" class="site-main">
    <section class="sobre-1" style="background: url('https://viverdeblog.com/wp-content/uploads/2013/02/bg-contato-1.jpg');
    background-repeat: no-repeat;">
        <div class="container">
            <div class="row py-5 align-middle" >
                <div class="col-12 py-5 mb-3 text-center">
                    <h2 class="font-weight-bold">
                        <?=$formContato['titulo']?>
                    </h2>
                    <h5>
                        <?=$formContato['subtitulo']?>
                    </h5>
                </div>                
            </div>
            <div class="row text-center justify-content-center">
                <div class="col-8 box-video-about shadow-1-strong pt-5 mb-5 bg-light">
                    <?=do_shortcode($formContato['shortcode_form'])?>
                </div>
            </div>
        </div>        
    </section>
   
    <?php get_template_part('template-parts/news-before-footer'); ?>

</main>