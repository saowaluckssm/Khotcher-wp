<?php get_header(); ?>

    <?php
    echo do_shortcode('[smartslider3 slider="3"]');
    ?>

    <!-- .................................................... -->
    <main>

    
      <!-- about -->
      <section class="main-about">
        <div class="container main-about-container">
          <h1>About</h1>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et ipsam
            vero porro quisquam dignissimos esse perspiciatis molestiae delectus
            eum at illum impedit, dolores sequi voluptatem consectetur quam
            nulla reiciendis autem? Animi quisquam excepturi eaque at suscipit!
            Corporis quae nobis iusto illum rem. Tempore, vero? Accusamus neque
            vel labore nam enim.
          </p>
          <p>
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et ipsam
            vero porro quisquam dignissimos esse perspiciatis molestiae delectus
            eum at illum impedit, dolores sequi voluptatem consectetur quam
            nulla reiciendis autem? Animi quisquam excepturi eaque at suscipit!
            Corporis quae nobis iusto illum rem. Tempore, vero? Accusamus neque
            vel labore nam enim.
          </p>

          <button class="btn btn-clear"><a href="#">Explore More</a></button>
        </div>
      </section>
      <!-- ---------------------------Product ------------------------------------>

      <section class="main-product">
        <div class="head-title">
          <div class="dark"></div>
          <h2>Products</h2>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-sm-6">
              <div class="product-left">
                <h4 class="card-title">Raw Material</h4>
                <div class="product-img">
                  <img
                    src="https://images.unsplash.com/photo-1622711321771-4a00d2bc0350?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80"
                    alt=""
                  />
                </div>
                <button class="btn btn-dark">
                  <a href="#">Explore More</a>
                </button>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="product-right">
                <h4 class="card-title">Finished Food</h4>
                <div class="product-img">
                  <img
                    src="https://images.unsplash.com/photo-1622711321771-4a00d2bc0350?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80"
                    alt=""
                  />
                </div>
                <button class="btn btn-dark">
                  <a href="#">Explore More</a>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- ************************Latestnews************************** -->

      <section class="main-latestnews">
        <div class="head-title">
          <div class="light"></div>
          <h2>Latest news</h2>
        </div>

        <div class="container">
          <div class="row row-cols-1 row-cols-md-3">
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