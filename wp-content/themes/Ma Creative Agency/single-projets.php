<?php get_header() ?>

<section class="page-title section pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <h1 class="text-capitalize mb-0 text-lg"><?= get_field('titre_projet') ?></h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section project-single">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="project-info">
                    <!--to do : gestion des paragraphes -->
                    <p><?= get_field('contenu_projet') ?></p>
                    <p><?= get_field('contenu_projet') ?></p>
                </div>

                <div class="my-5">
                    <div id="carouselProjects" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">

                            <?php
                            // check if the repeater field has rows of data
                            if (have_rows('images_projet')) :
                                $active = true;
                                // loop through the rows of data
                                while (have_rows('images_projet')) : the_row();

                                    // display a sub field value
                            ?>
                                    <div class="carousel-item
                <?php
                                    if ($active) {
                                        echo ' active';
                                        $active = false;
                                    }
                ?>
                ">
                                        <img src="<?= the_sub_field('image_projet'); ?>" class="d-block w-100" alt="">
                                    </div>

                            <?php

                                endwhile;
                            else :
                            // no rows found
                            endif;
                            ?>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselProjects" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselProjects" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>

                </div>
                <!--Si besoin des infos suivantes, les rendre dynamyques -->            
                <div class="row mt-4">
                    <div class="col-lg-6">
                        <div class="info">
                            <h5 class="mb-0">Client</h5>
                            <p>ACS</p>
                        </div>

                        <div class="info">
                            <h5 class="mb-0">Année</h5>
                            <p>2021</p>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="info">
                            <h5 class="mb-0">Categorie</h5>
                            <p>Web Design</p>
                        </div>
                        <div class="info">
                            <h5>Voir le projet</h5>
                            <a href="#"><i class="fas fa-globe"></i></a>
                            <a href="#"><i class="fab fa-github"></i></a>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                <?php
$prev_post = get_previous_post();
if($prev_post) {
   $prev_title = strip_tags(str_replace('"', '', $prev_post->post_title));
   echo "\t" . '<a rel="prev" href="' . get_permalink($prev_post->ID) . '" title="' . $prev_title. '" class="btn btn-dark">Projet précédent</a>' . "\n";
}

$next_post = get_next_post();
if($next_post) {
   $next_title = strip_tags(str_replace('"', '', $next_post->post_title));
   echo "\t" . '<a rel="next" href="' . get_permalink($next_post->ID) . '" title="' . $next_title. '" class="btn btn-dark">Projet suivant</a>' . "\n";
}
?>               
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer() ?>