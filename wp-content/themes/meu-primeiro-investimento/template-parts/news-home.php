<?php 
    $newsHome = get_field('news_home', 2010);   
?>
<section class="">
    <div class="container">
        <div class="box-news-home">
            <div class="row bg-white p-4 align-center">
                <div class="col-12 col-lg-6">
                    <p class="text-black-50 text-center text-lg-left">                        
                        <?=$newsHome['titulo'];?>
                    </p>
                    <h6 class="font-weight-bold col-12 col-lg-6 text-center text-lg-left">
                        <?=$newsHome['subtitulo'];?>
                    </h6>
                </div>
                <div class="col-12 col-lg-6 my-auto">
                    <?php
                        //echo do_shortcode($newsHome['shortcode_form']);
                    ?>
                    <form action="#" method="post" >  
                        <div class="form-outline row">
                            <div class="col-12 col-lg-8">
                                <input type="email" id="formEmailNews" name="email" placeholder="Qual seu melhor email?" value="" required="" class="form-control border">
                                <label class="form-label pl-3" for="formEmailNews">Qual seu melhor email?</label>                            
                            </div>
                            <div class="col-12 col-lg-4 p-3  p-lg-0 text-center text-lg-left">
                                <input type="submit" class="rpp btn btn-success" value="Cadastrar email">                                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>