<?php get_header(); ?>

<div class="main single">

    <?php //if (have_posts()) : ?>
        <?php //while (have_posts()) ?>
</div>
^^^^^^^^ ici c'est avec la fonction get_header ^^^^^^


<?php include ('header.php') ?>

<div class="container">
    <h1><?php the_title() ?></h1>
    <p><?php the_content() ?></p>
</div>
<div class="extra">
    <ul>
        <li><?php echo get_field('prix') ?></li>
        <li><?php echo get_field('varietes') ?></li>
    </ul>
</div>




<?php include ('footer.php') ?>