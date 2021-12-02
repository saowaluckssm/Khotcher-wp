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
            <li class="current"><a href="https://khotcherglobalfood.com/our-products/"><?php _e( "ALL PRODUCTS", "khotcher") ?></a></li>
            <div class="line"></div>
            <li><a href="https://www.khotcherglobalfood.com/category/finished-goods/"><?php _e( "FINISHED GOODS", "khotcher") ?></a></li>
            <div class="line"></div>
            <li><a href="https://www.khotcherglobalfood.com/category/raw-materials/"><?php _e( "RAW MATERIALS", "khotcher") ?></a></li>
          </ul>
        </div>
        
        <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php

                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

                $args = array(
                    'post_type' => 'products',
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
                      "prev_text" => __("Previous", "khotcher"),
                      "next_text" => __("Next", "khotcher")
                    )
                  ); ?>             
                </div>
            
            <?php 
            wp_reset_postdata();
            else:       
            ?>
            <p><?php _e( "There's nothing yet to be displayed", "khotcher") ?></p>
            <?php endif; ?>
            
          </div>

          
        </div>
        <div class="ending-text">
            <div></div>
            <p><?php _e( "We select the best for you", "khotcher") ?></p>
            <div></div>
          </div>
      </div>
    </main>
   
    
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 