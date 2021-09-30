<?php get_header(); ?>

<!-- ////////////////////////////////////////// -->
<div class="hero">
    <!-- <?php
    echo do_shortcode('[smartslider3 slider="5"]');
    ?> -->

</div>
<main class="single-product-page">
    <?php  
    while( have_posts() ): the_post();
    ?>
    <section class="single-product">
          <div class="row">
                <div class="col-md-6 col-12 content">
                    <h1><?php the_title(); ?></h1>
                    <p><?php _e( "Posted in : ", "khotcher") ?><?php echo get_the_date(); ?></p>
                    <small><?php _e( "Categories: ", "khotcher") ?><?php the_category(", "); ?></small>

                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
                    
                </div>
                <div class="single-product-img col-md-6 col-12">
                    <?php the_post_thumbnail(); ?>
                </div>

                
            </div>                         
    </section>
    <?php
    endwhile;
    ?>
    

    

</main>


<?php get_footer(); 