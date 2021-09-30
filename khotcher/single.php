<?php get_header(); ?>


    <!-- .................................................... -->
    <main class="single-news">
    <div class="container">
          <div class="row">
            <div class="col-12">
              
              <?php  
                  while( have_posts() ): the_post();
                  ?>
              <div class="card-post">
                <div class="head-title">
                  <div class="dark"></div>
                  <h2 class="card-title"><?php the_title(); ?></h2>
                  <p><?php echo get_the_date(); ?></p>
                </div>
              
                <div class="card mb-3">
                  <div class="single-news-img">
                    <?php the_post_thumbnail("large"); ?>
                    </div>
                  <div class="card-body">
                    
                    
                    <p class="card-text">
                          <?php the_content(); ?>
                    </p>
                    <p><?php _e( "Categories:  ", "khotcher") ?><small> <?php the_category(", "); ?></small></p>
                   
                    
                    
                  </div>
                </div>

                <?php
                endwhile;
                ?>
              </div>
            </div>                        
          </div>                 
      </div>

        <section class="main-latestnews">
        <div class="head-title">
          <div class="light"></div>
          <h2><?php _e( "Other News", "khotcher") ?></h2>
        </div>

        <div class="container">
          <div class="row row-cols-1 row-cols-lg-3 row-cols-sm-1">
            <?php 
            $args = array(
              "post_type" => "post",
              "posts_per_page" => 3,
              "category_name" => "News",
              "offset" => 1
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
                      <?php the_post_thumbnail(); ?>
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
                          <?php _e( "Read More →", "khotcher") ?>
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

        <button class="btn btn-dark"><a href="#"><?php _e( "Explore More", "khotcher") ?></a></button>
      </section>
      
       
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 