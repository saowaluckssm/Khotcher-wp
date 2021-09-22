<?php get_header(); ?>
    <div class="hero">
        <?php
        echo do_shortcode('[smartslider3 slider="7"]');
        ?>

    </div>

    <!-- .................................................... -->
    <main class="contact">
      <section class="contact-section">
        <div class="head-title">
          <div class="dark"></div>
          <h2>Head Quarter</h2>
        </div>

        <div class="contact-container">
          <div class="row">
            <div class="col-lg-5 col-12 content">
             <!-- Head-quarter snippet -->
            <?php dynamic_sidebar('smartslider_area_2'); ?>
            </div>
            <div class="col-lg-7 col-12">
              <div class="row row-cols-1 row-cols-md-3">
                 <!-- Head quarter img gallery -->
               
                 <?php 
                    $args = array(
                      "post_type" => "post",
                      "posts_per_page" => 3,
                      "category_name" => "head-quarter-img",
                    );

                    $new_featured = new WP_Query( $args );                  
                      while( $new_featured->have_posts() ):
                        $new_featured->the_post();
                  ?>
                    <div class="col">
                        <div class="card card-img">
                          <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                  <?php
                        endwhile;
                        wp_reset_postdata();
                  ?>           
              </div>

              <div class="card card-map">
                <!-- Google map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.30451789262!2d100.3650383405605!3d13.99994936304872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2890e854ef0b1%3A0x8caf207f0dc966d2!2zS2hvdGNoZXJnbG9iYWxmb29kIENvLixMVEQgL-C4muC4o-C4tOC4qeC4seC4lyDguITguIrguYDguIrguK3guKPguYwg4LmC4LiB4Lil4Lia4Lit4LilIOC4n-C4ueC5ieC4lCDguIjguLPguIHguLHguJQ!5e0!3m2!1sen!2sus!4v1631306510729!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="contact-section">
        <div class="head-title">
          <div class="light"></div>
          <h2>Factory</h2>
        </div>

        <div class="contact-container">
          <div class="row">
            <div class="col-lg-7 col-12">
              <div class="row row-cols-1 row-cols-md-3">
                 <!-- Factory img gallery -->
               
                 <?php 
                    $args = array(
                      "post_type" => "post",
                      "posts_per_page" => 3,
                      "category_name" => "Factory-img",
                    );

                    $new_featured = new WP_Query( $args );                  
                      while( $new_featured->have_posts() ):
                        $new_featured->the_post();
                  ?>
                    <div class="col">
                        <div class="card card-img">
                          <?php the_post_thumbnail(); ?>
                        </div>
                    </div>
                  <?php
                        endwhile;
                        wp_reset_postdata();
                  ?>  
                
              </div>
              <div class="card">
                <!-- Google map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3871.30451789262!2d100.3650383405605!3d13.99994936304872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2890e854ef0b1%3A0x8caf207f0dc966d2!2zS2hvdGNoZXJnbG9iYWxmb29kIENvLixMVEQgL-C4muC4o-C4tOC4qeC4seC4lyDguITguIrguYDguIrguK3guKPguYwg4LmC4LiB4Lil4Lia4Lit4LilIOC4n-C4ueC5ieC4lCDguIjguLPguIHguLHguJQ!5e0!3m2!1sen!2sus!4v1631306510729!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
              </div>
            </div>
            <div class="col-lg-5 col-12 content">
            <?php dynamic_sidebar('smartslider_area_3'); ?>
            
            </div>
          </div>
        </div>
      </section>
      <section class="contact-section">
        <div class="head-title">
          <div class="dark"></div>
          <h2>Khotcher's cafe</h2>
        </div>

        <div class="contact-container">
          <div class="row">
            <div class="col-lg-5 col-12 content">

            <!-- Khotcher cafe snippet -->
              <?php dynamic_sidebar('smartslider_area_1'); ?>
            </div>
            <div class="col-lg-7 col-12">
              <div class="row row-cols-1 row-cols-md-3">

              <!-- Cafe img gallery -->
               
                <?php 
                    $args = array(
                      "post_type" => "post",
                      "posts_per_page" => 3,
                      "category_name" => "Cafe-img",
                    );

                    $new_featured = new WP_Query( $args );                  
                      while( $new_featured->have_posts() ):
                        $new_featured->the_post();
                ?>
                 <div class="col">
                    <div class="card card-img">
                      <?php the_post_thumbnail(); ?>
                    </div>
                  </div>
                <?php
                      endwhile;
                      wp_reset_postdata();
                    ?>
                
              </div>
              <div class="card">
                <!-- Google map -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1936.2646218872194!2d100.48136165290471!3d13.927063345946337!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e2855d52bbdbb1%3A0x56d184e6214aae9a!2sKhotcher&#39;s%20Cafe!5e0!3m2!1sen!2sus!4v1631306952637!5m2!1sen!2sus" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy">
                </iframe>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 