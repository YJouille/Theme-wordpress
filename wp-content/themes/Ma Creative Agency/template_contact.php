<?php
/* Template name: Gabarit Contact */ 
include('header.php');
?>

<h1 id="titre"><?php the_title(); ?></h1>
<?php the_content(); ?>
<div class="contact">
<?php echo do_shortcode('[contact-form-7 id="42" title="Formulaire de contact 1" html_class="form contact-form"]')?>
</div>

<div class="map">
<h1 id="text_map">Retrouvez-nous</h1>
<?php echo do_shortcode('[ultimate_maps id="1"]')?>
</div>

<?php
include('footer.php');
?>