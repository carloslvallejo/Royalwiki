<?php get_header(); ?>


  <!------------------------------------- SINGLE PAGE ---------------------------->
 
<?php if (have_posts()) : while (have_posts() ) : the_post();?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8 p-3 bg-dark text-white">
            <?php the_content(); ?>

            <?php if(comments_open() || get_comment_number()) : comments_template(); endif; ?>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>
<?php endwhile; endif;?>
<?php get_footer(); ?>