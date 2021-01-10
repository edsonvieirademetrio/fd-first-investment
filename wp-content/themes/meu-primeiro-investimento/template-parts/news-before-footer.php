<?php 
    $newsFooter = get_field('news_footer', 2010);   
?>
<section class="news-before-footer bg-color-blue">
    <div class="container">
        <div class="row py-5 my-3">
            <div class="col text-center text-white">
                <h2 class="font-weight-bold">
                    <?=$newsFooter['titulo'];?>
                </h2>
                <h5 class="font-weight-normal">
                    <?=$newsFooter['subtitulo'];?>
                </h5>
                <div class="col-12 col-lg-6 mx-auto mt-3">
                    <?php
                        //echo do_shortcode($newsFooter['shortcode_form']);
                    ?>
                    <form action="#" method="post" >  
                        <div class="form-outline row">
                            <div class="col-12 col-lg-8">
                                <input type="email" id="formEmailNews" name="email" placeholder="Qual seu melhor email?" value="" required="" class="form-control border">
                                <label class="form-label pl-3" for="formEmailNews">Qual seu melhor email?</label>                            
                            </div>
                            <div class="col-12 col-lg-4 p-3 p-lg-0">
                                <input type="submit" class="rpp btn btn-success" value="Cadastrar email">                                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>