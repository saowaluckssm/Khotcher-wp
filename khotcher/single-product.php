/*
Template Name: Product Template 
Template Post Type: post, product
*/


<?php get_header(); ?>

<!-- ////////////////////////////////////////// -->
<div class="hero">
    <!-- <?php
    echo do_shortcode('[smartslider3 slider="5"]');
    ?> -->

</div>
<main class="single-product">
    <section class="single-product-left">

          <div class="row">
                <div class="col-md-6 col-12 content">
              
                    <?php  
                        while( have_posts() ): the_post();
                        ?>
                    <h1><?php the_title(); ?></h1>
                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
              
                    <div class="end-line dark"></div>

                    <div>
                        <button class="btn btn-dark">
                        <a href="#">Explore More</a>
                        </button>
                    </div>
                    
                    
                </div>
                <div class="single-product-img col-md-6 col-12">
                    <?php the_post_thumbnail(); ?>
                </div>

                <?php
                endwhile;
                ?>
            </div>                        
                       
      
    </section>
    <section class="single-product-right">
    <div class="row">
                        <?php  
                        while( have_posts() ): the_post();
                        ?>

                <div class="single-product-img col-md-6 col-12">
                    <?php the_post_thumbnail(); ?>
                </div>

                <div class="col-md-6 col-12 content">
              
                    
                    <h1><?php the_title(); ?></h1>
                    <p class="card-text">
                        <?php the_content(); ?>
                    </p>
              
                    <div class="end-line dark"></div>

                    <div>
                        <button class="btn btn-dark">
                        <a href="#">Explore More</a>
                        </button>
                    </div>
                </div>
              

                <?php
                endwhile;
                ?>
            </div> 
    
    </section>

    <section>
        <div class="head-title">
            <div class="dark"></div>
            <h2>Available at</h2>
        </div>
        <div class="thumbnail"></div>
    </section>
</main>


<?php get_footer(); 