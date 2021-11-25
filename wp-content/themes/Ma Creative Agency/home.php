<?php get_header() ?>


<div class="container">
    <div class="row justify-content-center">
        <?php if (have_posts()) :

            while (have_posts()) : the_post(); ?>
                <div class="col-12 row d-flex flex-wrap">
                <img class="col-6" src="<?php the_post_thumbnail_url(); ?>" alt="" style="height: 300px; object-fit: cover;">
                    <h1 class="text-center  col-6"><?php the_title() ?></h1>
                   
                    <?php the_content() ?>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>


<?php get_footer() ?>

