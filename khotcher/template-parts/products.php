
<div class="col-6 col-md-6 col-lg-4">
  <div class="card h-100 card-product">
    <div class="card-product">

      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail("thumbnail"); ?>
      </a>
     
      <div class="overlay">
      <a href="<?php the_permalink(); ?>">
        <p class="text"><?php the_title(); ?></p>
      </a>
      </div>
    </div>
  </div>
</div>