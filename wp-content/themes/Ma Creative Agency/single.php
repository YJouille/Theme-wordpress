<?php get_header() ?>

<div id="Page_article" class="container">
    <div class="row justify-content-center">
        <?php if (have_posts()) :

            while (have_posts()) : the_post(); ?>
                <div class="col-12">
                    <h1 class="text-center mb-5"><?php the_title() ?></h1>
                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" style="width: 100%; height: 300px; object-fit: cover;">
                    <p class="mt-5"><?php the_content() ?></p>
                </div>
        <?php endwhile;
        endif; ?>
        <?php
        comments_template(); // Par ici les commentaires 
        ?>
    </div>
</div>
<?php get_footer() ?>