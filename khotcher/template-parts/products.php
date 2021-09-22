
<div class="col-6 col-md-6 col-lg-4">
  <div class="card h-100 card-product">
    <div class="card-product">

      <a href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail(); ?>
      </a>
     
      <div class="overlay">
      <a href="<?php the_permalink(); ?>">
        <div class="text"><?php the_title(); ?></div>
      </a>
      </div>
    </div>
  </div>
</div>