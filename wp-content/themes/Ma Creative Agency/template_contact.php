<?php
/* Template name: Gabarit Contact */ 
include('header.php');
?>

<h1 id="titre"><?php the_title(); ?></h1>
<?php the_content(); ?>
<div class="map">
<h1 id="text_map">Retrouvez-nous</h1>
<?php echo do_shortcode('[ultimate_maps id="1"]')?>
</div>



<?php
include('footer.php');
?>