
<div class="col-6 col-md-6 col-lg-4 box">
  <div class="card h-100">
    <div class="card-product">

      <!-- <a href="<?php the_permalink(); ?>"> -->
      <?php the_post_thumbnail("thumbnail"); ?>
      <!-- </a> -->
     
      <div class="overlay">
        
        
        <p class="text"> 
          <a href="<?php the_permalink(); ?>">
            <?php the_tags(""); ?>
          </a>
       
        </p>
    
      </div>
    </div>
  </div>
</div>