<?php
/* Template name: Gabarit Homepage */
$image_header = get_field("image_header");
?>
<style>
    #header {
        background-image: url("<?= $image_header ?>");
    }
</style>


<!-- //////////////////////////SECTION 1 : HEADER & MENU///////////////////////// -->
<section id="header">
    <?php get_header(); ?>

    <h1><?php echo get_field("titre_header") ?></h1>
    <div>
        <div id="scroll-down">
            <p><?php echo get_field("scroll_down_text_header") ?> </p>
            <div class="scroll-down-button"></div>
        </div>
    </div>
</section>


<!-- //////////////////////////SECTION 2 : W.A.A.A.///////////////////////// -->
<section id="waaa" class="container-fluid d-flex">
    <style>
        /* style dans le html pour ajouter la fonctionnalité de changer la couleur du fond */
        #waaa {
            background-color: #d21242;
        }
    </style>

    <div id="slogan-agence">
        <h2><?php echo get_field("slogan_agence"); ?></h2>
        <div id="lettrine-agence"> <?php echo get_field("lettrine_agence"); ?></div>
    </div>


    <div class="blocs-agence ">
        <?php
        //////////////////////////////////////////////////////////////////// boucle pour récupérer les blocs du WAAA
        if (have_rows('bloc_agence')) {
            while (have_rows('bloc_agence')) {
                the_row();
                $sub_value_picto = get_sub_field('picto_bloc_agence');
                $sub_value_title = get_sub_field('titre_bloc_agence');
                $sub_value_text = get_sub_field('texte_bloc_agence');
        ?>
                <div class="card" style="width: 18rem;">
                    <img src="<?= $sub_value_picto ?>" class="card-img-top" alt="pictogramme">
                    <div class="card-body">
                        <h5 class="card-title"><?= $sub_value_title ?></h5>
                        <p class="card-text"><?= $sub_value_text ?></p>
                    </div>
                </div>
        <?php
            }
        };
        ?>
    </div>
</section>
<!-- //////////////////////////SECTION 3 : Projets///////////////////////// -->
<section id="projects" class="container-fluid d-flex flex-column justify-content-start g-0 m-0">
     
    <?php
    ///////////////////////////////////////////////////// boucle pour récupérer les 2 blocs projets
    $args = array(
        'post_type' => 'projets',
        'posts_per_page' => 2,
    );

    $the_query = new WP_Query($args);
    while ($the_query->have_posts()) : $the_query->the_post();
    ?>
        <div class="project d-flex justify-content-center row g-0">
            <div class="project-content d-flex flex-column align-items-left justify-content-center col-lg-6   m-0 g-0">
                <h3><?= get_field('titre_projet') ?></h3>
                <p><?= get_field('resume_projet') ?></p>
            </div>

            <div class="img-container col-lg-6   m-0 g-0">
                <?php
                // check if the repeater field has rows of data
                if (have_rows('images_projet')) :

                    // loop through the rows of data
                    while (have_rows('images_projet')) : the_row();

                        // display a sub field value
                ?>
                        <a href="<?= get_post_permalink() ?>" target="_blank">
                            <img src="<?= the_sub_field('image_projet'); ?>" alt="image projet">
                        </a>
                <?php
                        break; //Pour afficher une seule image
                    endwhile;
                else :
                // no rows found
                endif;
                ?>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
</section>
<!-- //////////////////////////SECTION  3: Blog ///////////////////////// -->

<div>
    <div id="slogan-blog">
        <h2><?= get_field('titre_blog'); ?></h2>
        <div id="lettrine-blog"><?= get_field('lettrine_blog'); ?></div>
    </div>
    <div id="accroche-blog" class="text-center"><?= get_field('accroche_blog'); ?></div>
</div>

<?php
$posts = get_posts([
    "posts_per_page" => 4,
    "orderby" => "date",
    "order" => "DESC",
]);

// echo '<pre>';
// var_dump($posts);
// echo '</pre>';
?>
<section>
    <div class="container">
        <div class="row">
            <?php if ($posts) {
                foreach ($posts as $post) {
                    $post_title = $post->post_title;
                    $post_guid = $post->guid;
                    $post_excerpt = $post->post_excerpt;
            ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="mt-5">
                            <?php the_post_thumbnail('card-blog', ['class' => 'card-img-top', 'alt' => '']); ?>
                            <div class="mt-3">
                                <a class="article_name" href="<?= $post_guid; ?>">
                                    <h5 class="text-center"><?= $post_title; ?></h5>
                                </a>
                                <p class="article_excerpt text-center mt-3"><?= $post_excerpt; ?></p>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <h1>Pas d'articles</h1>
            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer() ?>