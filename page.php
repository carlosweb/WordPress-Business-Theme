<?php get_header(); ?>

<div class="content">
    <div class="header-page">
        <h1><?php the_title();?></h1>
    </div>

    <div class="text-page">
        <div class="posts">
            <?php 
            if(have_posts()){
                    the_post();
                    ?>
                    <article>
                        <p><?php the_content(); ?></p>
                        <div class="img-page">
                            <?php if ( has_post_thumbnail()) the_post_thumbnail(''); ?>
                        </div>
                    </article>
                    <?php
                }
                ?>
        </div>
    </div>
</div>

<?php get_footer();?>