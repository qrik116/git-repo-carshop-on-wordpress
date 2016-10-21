<div class="col-lg-9 col-sm-9">
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="main_title">
                <h1><?php the_title();?></h1>
            </div>
        </div>
    </div>
    <div class="row">

        <?php 
            global $post;
            $myposts = get_posts( );
            foreach( $myposts as $post ){ setup_postdata($post); ?>
            <div class="col-lg-4 col-sm-6">
                <div class="small_card">
                    <figure>
                        <?php if ( has_post_thumbnail() ) {
	                               the_post_thumbnail();
                                } ?>
                            <figcaption><small><?php $category = get_the_category(); echo $category[0] -> name; ?></small></figcaption>
                    </figure>
                    <article>
                        <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                                <a href="<?php echo get_permalink();?>" title="<?php the_title();?>">Перейти</a>
                    </article>
                </div>
            </div>
            <?} wp_reset_postdata(); ?>
    </div>
</div>
</div>
</div>
</div>
<div class="row">
    <div class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-sm-6">
                <div class="big_card">
                    <img src="<?php bloginfo('template_url')?>/images/Form.png" alt="Форма" />
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-sm-6">
                <div class="form">
                    <form action="/home/order" method="post">
                        <fieldset>
                            <legend>Оформление заказа</legend>
                            <input type="text" name="Name" placeholder="Введите ваше имя" required />
                            <br/>
                            <input type="tel" name="tel" placeholder="8-(888)-444-33-22" required pattern="8-[0-9]{3}-[0-9]{3}-[0-9]{4}" />
                            <br/>
                            <select name="Car">
                                <option value="Ghibli">Ghibli</option>
                                <option value="Quattroporte">Quattroporte</option>
                                <option value="GranTuristo">GranTuristo</option>
                            </select>
                            <br/>
                            <input type="submit" name="sub" value="Заказать" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>