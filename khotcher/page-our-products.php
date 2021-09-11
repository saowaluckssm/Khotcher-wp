<?php get_header(); ?>
    <?php
    echo do_shortcode('[smartslider3 slider="5"]');
    ?>


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
          <div class="row row-cols-1 row-cols-md-3">
            <?php
                $args = array(
                    'post_type' => 'post',
                    "category_name" => "Products",
                );

                $post_query = new WP_Query($args);

                if($post_query->have_posts() ):
                    while($post_query->have_posts() ): 
                        $post_query->the_post();
                get_template_part( "template-parts/products" );
            endwhile;
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