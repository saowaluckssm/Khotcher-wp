<div class="col-12 col-md-6 col-lg-4">
     <div class="card h-100">
      <div class="card-img">
          <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail(); ?>
          </a>
      </div>

      <div class="card-body">
        <a href="<?php the_permalink(); ?>">
        <h4 class="card-title"><?php the_title(); ?></h4>
        </a>
        <p class="card-text">
          <?php the_excerpt(); ?>
        </p>
          <a href="<?php the_permalink(); ?>">
              <small class="read-more">
              <?php _e( "Read More ", "khotcher") ?><span>→</span>
              </small>
          </a>
      </div>
    </div>
</div>