<?php get_header(); ?>
    <div class="hero">
        <?php
        echo do_shortcode('[smartslider3 slider="6"]');
        ?>

    </div>

    <main>
      <div class="news">
        <div class="filter">
          <ul>
            <li class="current"><a href="http://www.khotcherglobalfood.com/news/"><?php _e( "Latest", "khotcher") ?></a></li>
            <div class="line"></div>
            <li><a href="http://www.khotcherglobalfood.com/category/news/article/"><?php _e( "Article", "khotcher") ?></a></li>
            <div class="line"></div>
            <li><a href="http://www.khotcherglobalfood.com/category/news/csr/"><?php _e( "csr", "khotcher") ?></a></li>
            <div class="line"></div>
            <li><a href="http://www.khotcherglobalfood.com/category/news/new-events/"><?php _e( "News&Events", "khotcher") ?></a></li>
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
            <p><?php _e( "There's nothing yet to be displayed", "khotcher") ?></p>
            <?php endif; ?>
          </div>

        </div>
      </div>
    </main>
  
<?php get_footer(); 