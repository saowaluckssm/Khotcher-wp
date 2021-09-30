<?php get_header(); ?>

<!-- ////////////////////////////////////////// -->
<div class="hero">
    <!-- <?php
    echo do_shortcode('[smartslider3 slider="5"]');
    ?> -->

</div>

<main class="category-page">
  <div class="products">
       
        <div class="filter">
        <ul>
            
            <li>
              <a>
              <?php
              single_term_title();
              ?>
              </a>
            </li>
        </ul>
      </div>
      <div class="container">
          <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3">
            <?php
                if(have_posts() ):
                    while(have_posts() ): the_post();
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

          <div class="ending-text">
            <div></div>
            <p><?php _e( "We select the best for you", "khotcher") ?></p>
            <div></div>
          </div>
      </div>
  </div>
</main>


<?php get_footer(); 