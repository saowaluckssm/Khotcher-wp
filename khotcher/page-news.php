<?php get_header(); ?>

    <?php
    echo do_shortcode('[smartslider3 slider="6"]');
    ?>

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
          <div class="row row-cols-1 row-cols-md-3">
            <?php
                $args = array(
                    'post_type' => 'post',
                    "category_name" => "News",
                );

                $wp_query = new WP_Query($args);

                if($wp_query->have_posts() ):
                    while($wp_query->have_posts() ): 
                        $wp_query->the_post();
                get_template_part( "template-parts/news" );
            endwhile;
            ?>
             <div class="page-button">
             <!-- <?php posts_nav_link(); ?> -->
             <!-- <?php posts_nav_link( ' · ', 'previous page', 'next page' ); ?> -->
             <?php previous_posts_link("<< Newer"); ?>
             <?php next_posts_link("Older >>"); ?>
                
             </div>
                <?php 
                else:       
                ?>
                <p>There's nothing yet to be displayed</p>
                <?php endif; ?>
          </div>
<!-- 
          <div class="page-button">
            <p><a href="#">Previous</a></p>
            <p><a href="#">1</a></p>
            <p><a href="#">2</a></p>
            <p><a href="#">3</a></p>
            <p><a href="#">Next</a></p>
          </div> -->
        </div>
      </div>
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 