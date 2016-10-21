<?php
/*
Template Name: Шаблон Главной станицы
*/
?>
<?php get_header(); ?>
   <!--Основной контент-->
    <div class="row">
        <div class="col-lg-10 col-lg-offset-1 col-sm-10 col-sm-offset-1">
            <div class="row">
               <!-- Меню -->
                <?php get_sidebar(); ?>
                <!--Сам контент-->
                <?get_template_part('main');?> 
<?php get_footer(); ?>