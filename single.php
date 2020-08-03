<?php get_header(); ?>

<div class="content">
    <div class="header-page">
        <h1><?php the_title(); ?></h1>
    </div>

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post(); ?>

    <div class="introduce">
        <div class="description-project">
            <h1><?php the_title(); ?></h1>
            <div class="text">
                <p><?php the_content(); ?></p>
            </div>
        </div>

        <div class="image-project">
            <?php if (has_post_thumbnail()) {
            the_post_thumbnail('home-thumb');
        } ?>
        </div>
    </div>

    <div class="bt-other-projects">
        <a  class="btn primary" href="<?php the_permalink();?>">Veja Mais Projetos</a>
    </div>

    <?php
        }
    } ?>


</div>

<?php get_footer(); ?>
