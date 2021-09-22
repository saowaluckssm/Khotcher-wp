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
                    <?php the_post_thumbnail(); ?>
                  <div class="card-body">
                    
                    <p class="card-text">
                          <?php the_content(); ?>
                    </p>
                    
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
          <h2>Other News</h2>
        </div>

        <div class="container">
          <div class="row row-cols-1 row-cols-md-3 row-cols-sm-1">
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
                get_template_part( "template-parts/news" );

              endwhile;
              wp_reset_postdata();
            endif;
            ?>

          </div>
        </div>

        <button class="btn btn-dark"><a href="#">Explore More</a></button>
      </section>
      
       
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 