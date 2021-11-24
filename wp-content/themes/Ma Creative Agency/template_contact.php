<?php
/* Template name: Gabarit Contact */

get_header() ?>

    <h1 id="titre"><?php the_title() ?></h1>
    <p><?php the_content() ?></p>

<?php if ( is_active_sidebar( 'map' ) ) : ?>
         <div id="map" class="footer-widget widget-area" role="complementary">
         <?php dynamic_sidebar( 'map' ); ?>
         </div>
         <?php endif; ?>
<?php get_footer() ?>
