<?php get_header(); ?>

  

    <!-- .................................................... -->
    <main>
      <div class="container">
      
          <div class="row row-cols-1 row-cols-md-3">
            <div class="col">
              <div class="card">
                <?php 

                if( have_posts() ):
                  while( have_posts() ): the_post();
                ?>

                <div class="card-body">
                  <h4 class="card-title"><?php the_title(); ?></h4>
                  <p class="card-text">
                    <?php the_content(); ?>
                  </p>
                </div>

                <?php
                endwhile;
                else:
                ?>
                <p>There's nothing yet to be displayed!</p>

                <?php endif; ?>
              </div>
            </div>
            
            
          </div>
        
      </div>
    </main>
    <!-- ////////////////////////////////////////////////////////////// -->
<?php get_footer(); 