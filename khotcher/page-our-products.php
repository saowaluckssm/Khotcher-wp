<?php get_header(); ?>
<div class="hero">
    <?php
    echo do_shortcode('[smartslider3 slider="5"]');
    ?>

</div>



    <!-- .................................................... -->
    <main>
      <div class="products">
        <div class="filter">
          <ul>
            <li><a href="#">FINISTED GOODS</a></li>
            <div class="line"></div>
            <li><a href="#">RAW MATERIAL</a></li>
          </ul>
        </div>
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php

                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'post_type' => 'post',
                    "category_name" => "Products",
                    'paged' => $paged
                );

                $wp_query = new WP_Query($args);

                if($wp_query->have_posts() ):
                    while($wp_query->have_posts() ): 
                        $wp_query->the_post();
                get_template_part( "template-parts/products" );
            endwhile;

            ?>

                <div class="col-6 page-button">  
                  <?php the_posts_pagination(
                    array(
                      "prev_text" => "Previous",
                      "next_text" => "Next"
                    )
                  ); ?>             
                </div>
            
            <?php 
            wp_reset_postdata();
            else:       
            ?>
            <p>There's nothing yet to be displayed</p>
            <?php endif; ?>
            
          </div>

          <div class="ending-text">
            <div></div>
            <p>We select the best for you</p>
            <div></div>
          </div>
        </div>
      </div>
    </main>
   
    
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 