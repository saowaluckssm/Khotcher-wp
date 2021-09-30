<?php get_header(); ?>

<!-- ////////////////////////////////////////// -->
    <div class="hero tag-hero">
            <?php
            echo do_shortcode('[smartslider3 slider="17"]');
            ?>
            <div class="tag-header">
        <h1>
            <?php
            single_term_title();
            ?>
        </h1>
    </div>
           
    </div> 
    
    
  
   
    
  
<main class="tag-page">
    
    
          <?php  
          while( have_posts() ): the_post();
          ?>

    <section class="tag-product">

          <div class="row">
                <div class="tag-product-img col-lg-6 col-12">
                    <?php the_post_thumbnail("medium"); ?>
                </div> 
                <div class="col-lg-6 col-12 content">                   
                    <div class="content-section">
                   
                    <h1><?php the_title(); ?></h1>
                    <p><?php _e("Posted in : ", "khotcher")?><?php echo get_the_date(); ?></p>
                    <small><?php _e("Categories: ", "khotcher")?><?php the_category(", "); ?></small>
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
                    
                
                               
            </div>                           
    </section>
    <?php
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
    

    <div class="market">
        <div class="head-title">
            <div class="dark"></div>
            <h2><?php _e("Available at", "khotcher")?></h2>
        </div>
        <div class="market-logo-thumbnail">
        <?php dynamic_sidebar('smartslider_area_4'); ?>
        </div>
    </div>

</main>


<?php get_footer(); 