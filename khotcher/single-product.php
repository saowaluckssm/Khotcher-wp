<!-- /*
Template Name: Product Template 
Template Post Type: products
*/ -->




<?php get_header(); ?>

<!-- ////////////////////////////////////////// -->
<div class="hero">
    <!-- <?php
    echo do_shortcode('[smartslider3 slider="5"]');
    ?> -->

</div>
<main class="single-product-page">
    <section class="single-product">

          <div class="row">
                <div class="single-product-img col-lg-6 col-12">
                    <?php the_post_thumbnail("medium"); ?>
                </div>
                <div class="col-lg-6 col-12 content">
                    
                    <div class="content-section">
                    <?php  
                        while( have_posts() ): the_post();
                        ?>
                    <h1><?php the_title(); ?></h1>
                    <p><?php _e( "Posted in : ", "khotcher") ?><?php echo get_the_date(); ?></p>
                    <small><?php _e( "Categories: ", "khotcher") ?><?php the_category(", "); ?></small>
                    <br>
                    <small><?php the_tags("Tags: ", ","); ?></small>

                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
                    </div>
              
                    
                    <!-- <div class="button">
                        <button class="btn btn-dark">
                            <a href="#">Shop now</a>
                        </button>
                    </div> -->
                    
                </div>
                    
                
                

                <?php
                endwhile;
                ?>
            </div>                        
                       
      
    </section>
    <div class="market">
        <div class="head-title">
            <div class="dark"></div>
            <h2>Available at</h2>
        </div>
        <div class="market-logo-thumbnail">
        <?php dynamic_sidebar('smartslider_area_4'); ?>
        </div>
    </div>
    

   

</main>


<?php get_footer(); 