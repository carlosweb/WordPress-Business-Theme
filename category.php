<?php get_header(); ?>
<div class="posts">
    <?php 
    if(have_posts()){
        while(have_posts()) {
            the_post();
            ?>
            <article>
                <a href="<?php the_permalink() ?>">
                    <?php the_post_thumbnail('thumbnail', array('class' => 'postdefault')); ?>
                    <h2><a href="<?php the_permalink() ?>"> <?php the_title();?> </a></h2>
                    <p><?php the_excerpt(); ?></p>
                </a>
            </article>
            <?php
        }
    }
    ?>
</div>
<?php get_footer();?>