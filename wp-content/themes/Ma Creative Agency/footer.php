
     <!-- ajout des widget  -->
     <section class="top-footer">
 <?php if ( is_active_sidebar( 'footer_1' ) ) : ?>
 <div id="footer_1" class="footer-widget widget-area" role="complementary">
 <?php dynamic_sidebar( 'footer_1' ); ?>
 </div>
 <?php endif; ?>

 <?php if ( is_active_sidebar( 'footer_2' ) ) : ?>
 <div id="footer_2" class="footer-widget widget-area" role="complementary">
 <?php dynamic_sidebar( 'footer_2' ); ?>
 </div>
 <?php endif; ?>
     </section>


     <section class="bottom-footer">

 <?php if ( is_active_sidebar( 'footer_3' ) ) : ?>
 <div id="footer_3" class="footer-widget widget-area" role="complementary">
 <?php dynamic_sidebar( 'footer_3' ); ?>
 </div>
 <?php endif; ?>

 <?php if ( is_active_sidebar( 'footer_4' ) ) : ?>
 <div id="footer_4" class="footer-widget widget-area" role="complementary">
 <?php dynamic_sidebar( 'footer_4' ); ?>
 </div>
 <?php endif; ?>
 <?php //if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('<b>footer_top'))?></b>
 <!-- fin nouvelle widget area -->
  

    
</section>
</body></html>


