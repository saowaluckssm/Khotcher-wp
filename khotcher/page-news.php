<?php get_header(); ?>
    <div class="hero">
        <?php
        echo do_shortcode('[smartslider3 slider="6"]');
        ?>

    </div>



    <!-- .................................................... -->
    <main>
      <div class="news">
        <div class="filter">
          <ul>
            <li><a href="#">Latest</a></li>
            <div class="line"></div>
            <li><a href="#">Article</a></li>
            <div class="line"></div>
            <li><a href="#">csr</a></li>
            <div class="line"></div>
            <li><a href="#">News&Events</a></li>
          </ul>
        </div>



        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            
            <?php
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'post_type' => 'post',
                    "category_name" => "News",
                    'paged' => $paged
                );

                $wp_query = new WP_Query($args);

                if($wp_query->have_posts() ):
                    while($wp_query->have_posts() ): 
                        $wp_query->the_post();
                get_template_part( "template-parts/news" );
               
              endwhile;
             
              ?>

            <div class="col page-button">  
              <?php posts_nav_link(); ?>             
            </div>
            
              <?php 
             wp_reset_postdata();
            else:       
            ?>
            <p>There's nothing yet to be displayed</p>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 