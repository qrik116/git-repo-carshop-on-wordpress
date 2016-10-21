<?php
/*
Template Name: Шаблон Страниц
*/
?>
<?php get_header(); ?>
        <!--Основной контент-->
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">
                <div class="row">
                    <!-- Меню -->
                    <?php get_sidebar();?>
                    <!--Сам контент-->
                    <?get_template_part('content_page');?>
<?php get_footer(); ?>