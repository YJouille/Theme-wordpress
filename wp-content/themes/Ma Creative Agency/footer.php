  <!-- ajout des widget  -->
  <section class="top-footer">
    <div class="footer_left row">
      
      <?php if (is_active_sidebar('footer_1_img')) : ?>
        <div id="footer_1_img" class="footer-widget widget-area col-2" role="complementary">
          <?php dynamic_sidebar('footer_1_img'); ?>
        </div>
      <?php endif; ?>
      <?php if (is_active_sidebar('footer_1')) : ?>
        <div id="footer_1" class="footer-widget widget-area col-10" role="complementary">
          <?php dynamic_sidebar('footer_1'); ?>
        </div>
      <?php endif; ?>
    </div>
    <div class="footer_right row">
      <?php if (is_active_sidebar('footer_2_img')) : ?>
        <div id="footer_2_img" class="footer-widget widget-area col-2" role="complementary">
          <?php dynamic_sidebar('footer_2_img'); ?>
        </div>
      <?php endif; ?>
      <?php if (is_active_sidebar('footer_2')) : ?>
        <div id="footer_2" class="footer-widget widget-area col-10" role="complementary">
          <?php dynamic_sidebar('footer_2'); ?>
        </div>
    </div>
  <?php endif; ?>
  </section>


  <section class="bottom-footer">

    <?php if (is_active_sidebar('footer_3')) : ?>
      <div id="footer_3" class="footer-widget widget-area" role="complementary">
        <?php dynamic_sidebar('footer_3'); ?>
      </div>
    <?php endif; ?>

    <?php if (is_active_sidebar('footer_4')) : ?>
      <div id="footer_4" class="footer-widget widget-area" role="complementary">
        <?php dynamic_sidebar('footer_4'); ?>
      </div>
    <?php endif; ?>
    <!-- fin nouvelle widget area -->

  </section>
  <script src="<?php echo get_template_directory_uri(); ?>\script.js"></script>
  </body>

  </html>