<?php get_header() ?>


<div class="container">
    <div class="row justify-content-center">
        <?php if (have_posts()) :

            while (have_posts()) : the_post(); ?>
                <div class="col-12">
                    <h1 class="text-center"><?php the_title() ?></h1>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                    <?php the_content() ?>
                </div>
        <?php endwhile;
        endif; ?>
    </div>
</div>


<?php get_footer() ?>

