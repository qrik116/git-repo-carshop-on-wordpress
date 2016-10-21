<div class="col-lg-9 col-sm-9">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="main_title">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-sm-12">
           <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
            
            <!--здесь формирование вывода постов,-->
            <!--где работают теги шаблона относящиеся к the loop, например, the_title()-->
            <!--<img src="https://wallpaperscraft.com/image/form_green_shadow_dark_85047_800x600.jpg" />-->
            <?php $cont = get_the_content();
            $pattren = '/src="(.*)" /'; //выражение, которое помогает нам взять текст между ним, взять путь до картинки
            preg_match_all($pattren, $cont, $match); // само вырезание путя и оно находить в матрице матч по координатам [1][0-х] х-кол-во картинок
                        //print $match[1][0];?>  
            <?php endwhile; ?>
            <?php endif; ?>
            <div class="carousel">
               <?php foreach ($match[1] as $new_match){?><!--в цикле вставляем картинки в нужный div-->
                    <div class="big_pic"> <!--и в данном случае с помощью плагина карусель выводим-->
                        <img class="lazyOwl" data-src="<?php echo $new_match; ?>" alt="Превью" />
                    </div>
                <?}
                ?>
                <!--
                <div class="big_pic">
                    <img class="lazyOwl" data-src="<?php bloginfo('template_url')?>/images/Ghibli-1.jpeg" alt="Превью" />
                </div>
                <div class="big_pic">
                    <img class="lazyOwl" data-src="<?php bloginfo('template_url')?>/images/Ghibli-2.jpeg" alt="Превью" />
                </div>
                <div class="big_pic">
                    <img class="lazyOwl" data-src="<?php bloginfo('template_url')?>/images/Ghibli-3.jpeg" alt="Превью" />
                </div>-->

            </div>
        </div>
    </div>
</div>
</div>
</div>