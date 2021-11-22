<?php get_header(); ?>


<div class="container">
    <h1><?php the_title() ?></h1>
    <p><?php the_content() ?></p>
</div>
<div class="extra">
    <ul>
        <li><?php echo get_field('prix'); ?></li>
        <li><?php echo get_field('varietes'); ?></li>
    </ul>
</div>



