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
<section id="projects" class="container-fluid d-flex">
    <style>
        /* style dans le html pour ajouter la fonctionnalité de changer la couleur du fond */
        #projects {
            background-color: #d21242;
        }
    </style>
    <?php
    ///////////////////////////////////////////////////// boucle pour récupérer les 2 blocs projets
    $args = array(
        'post_type' => 'projets',
    );

    $the_query = new WP_Query($args);
    while ($the_query->have_posts()) : $the_query->the_post();

    ?>

        <div class="project">
            <div class="project-content">
                <h3><?= get_field('titre_projet') ?></h3>
                <p><?= get_field('resume_projet') ?></p>
            </div>

            <div class="img-container">
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
<?php
include 'footer.php'; ?>