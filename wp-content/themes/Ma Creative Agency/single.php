<?php get_header() ?>
<section id="Page_article">
    <!-- <div class="container ">
        <div class="row justify-content-center my-5"> -->
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
            
        <!-- </div>
    </div> -->
</section>
<?php get_footer() ?>