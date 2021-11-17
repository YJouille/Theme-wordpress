<?php



include('header.php');
?>




<div class="container">
    <h1><?php the_title(); ?></h1>
    <div class="content">
    <?php the_content(); ?>
    </div>
    <p>bonjour </p>
    <span>Prix : <?php echo get_field('prix'); ?>€</span><br/>
    <span>Variété : <?php echo get_field('varietes'); ?></span><br/>
    <span><img src="<?php echo get_field('image_du_projet'); ?>" /></span><br/>
</div>



<?php
include('footer.php');

?>

