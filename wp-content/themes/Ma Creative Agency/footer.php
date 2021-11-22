<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src=" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>









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


