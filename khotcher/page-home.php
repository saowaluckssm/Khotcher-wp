<?php get_header(); ?>

      <div class="hero">
        <?php
            echo do_shortcode('[smartslider3 slider="3"]');
            ?>

      </div> 
     

    <!-- .................................................... -->
    <main>
      <!-- about section-->
      <section class="main-about box">


          <?php
          echo do_shortcode('[smartslider3 slider="15"]');
          ?>

      </section>
      <!-- ---------------------------Product ------------------------------------>

      <section class="main-product box">
        <div class="head-title">
          <div class="dark"></div>
          <h2><?php _e( "Products", "khotcher") ?></h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 col-lg-6">
              <div class="product-left">
               
                
                <?php
                if( is_active_sidebar("home-page-product-1")){
                  dynamic_sidebar("home-page-product-1");
                }

                ?>
              
                <button class="btn btn-dark">
                  <a href="http://www.khotcherglobalfood.com/category/products/raw-materials/"><?php _e( "Explore More", "khotcher") ?></a>
                </button>
              </div>
            </div>
            <div class="col-12 col-lg-6">
              <div class="product-right">
               
                <?php
                if( is_active_sidebar("home-page-product-2")){
                  dynamic_sidebar("home-page-product-2");
                }

                ?>
                  
                
                <button class="btn btn-dark">
                  <a href="http://www.khotcherglobalfood.com/category/products/finished-goods/"><?php _e( "Explore More", "khotcher") ?></a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ************************Latestnews************************** -->

      <section class="main-latestnews box">
        <div class="head-title">
          <div class="light"></div>
          <h2><?php _e( "Latest news", "khotcher") ?></h2>
        </div>

        <div class="container">
          <div class="row row-cols-1 row-cols-lg-3">
            <?php 
            $args = array(
              "post_type" => "post",
              "posts_per_page" => 3,
              "category_name" => "News",
            );

            $new_featured = new WP_Query( $args );

            if( $new_featured->have_posts() ):
              while( $new_featured->have_posts() ):
                $new_featured->the_post();
                

            ?>
            <div class="col-12 col-lg-4">
                <div class="card h-100">
                  <div class="card-img">
                      <a href="<?php the_permalink(); ?>">
                      <?php the_post_thumbnail("thumbnail"); ?>
                      </a>
                  </div>

                  <div class="card-body">
                      <a href="<?php the_permalink(); ?>">
                      <h4 class="card-title"><?php the_title(); ?></h4>
                      </a>
                      <p class="card-text">
                        <?php the_excerpt(); ?>
                      </p>
                      <a href="<?php the_permalink(); ?>">
                          <small class="read-more">
                          <?php _e( "Read More", "khotcher") ?><span>→</span>
                          </small>
                      </a>
                  </div>
                </div>
            </div>
            <?php

              endwhile;
              wp_reset_postdata();
            endif;
            ?>

          </div>
        </div>
        <div>
        <button class="btn btn-dark"><a href="http://www.khotcherglobalfood.com/news/"><?php _e( "Explore More", "khotcher") ?></a></button>
        </div>
      </section>
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 