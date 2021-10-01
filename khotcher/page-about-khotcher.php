<?php get_header(); ?>

  <div class="hero">
    <?php
    echo do_shortcode('[smartslider3 slider="4"]');
    ?>

  </div>

    <!-- .................................................... -->
    <main class="about">
      <section class="about-section bg-light pd-2">
       
        <div class="row">
          <div class="about-section-img col-lg-6 col-12">
            <?php
            if( is_active_sidebar("about-page-vision-img")){
              dynamic_sidebar("about-page-vision-img");
            }
            ?>
          
          </div>
          <div class="col-lg-6 col-12 content">
            
              <?php
              if( is_active_sidebar("about-page-vision-contents")){
                dynamic_sidebar("about-page-vision-contents");
              }
              ?>
            
            <div class="end-line dark"></div>
          </div>
        </div>
        
      </section>
      <section class="about-section bg-primary">
        <div class="row">
            <div class="col-lg-6 col-12 content">
              <?php
              if( is_active_sidebar("about-page-mission-contents")){
                dynamic_sidebar("about-page-mission-contents");
              }
              ?>
            
          
            <div class="end-line dark"></div>
          </div>
          <div class="about-section-img col-lg-6 col-12">
              <?php
              if( is_active_sidebar("about-page-mission-img")){
                dynamic_sidebar("about-page-mission-img");
              }
              ?>
           
          </div>
        </div>
      </section>
     
      <div class="about-cafe-container">
      
        <div class="head-cafe">
          <h4 class="left"><?php _e( "Specialty Coffee", "khotcher") ?></h4>
          <h4 class="right"><?php _e( "Homemade Bakery", "khotcher") ?></h4>

         
        
         
            <div class="about-cafe-img">
              <?php
                if( is_active_sidebar("about-page-cafe-img")){
                  dynamic_sidebar("about-page-cafe-img");
                }
              ?>
            </div>

        </div>
       
               

        <div class="container">
          <?php
            if( is_active_sidebar("about-page-cafe-contents")){
              dynamic_sidebar("about-page-cafe-contents");
            }
            ?>

        </div>
        
        
       
     
      </div>
      <section>
        <div class="thumbnail">
        <?php dynamic_sidebar('smartslider_area_5'); ?>
        </div>
      </section>
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 