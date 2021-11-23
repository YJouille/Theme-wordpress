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
         <!-- fin nouvelle widget area -->
            
        </section>
        <script src="<?php echo get_template_directory_uri(); ?>\script.js"></script>        
        </body>        
        </html>